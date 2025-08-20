<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;

class PageCache
{
    public function handle($request, Closure $next)
    {
        $cfg = config('nitrolite');

        if (!$cfg['enabled'] || !$this->isCacheableRequest($request, $cfg)) {
            return $next($request);
        }

        $key = $this->makeCacheKey($request, $cfg);

        // 1) Intentar servir desde caché
        $cached = Cache::store($cfg['store'])->get($key);
        if ($cached) {
            return $this->hydrateResponse($cached);
        }

        // 2) Continuar petición y cachear si aplica
        /** @var Response $response */
        $response = $next($request);

        if ($this->isCacheableResponse($response)) {
            $payload = [
                'status'  => $response->getStatusCode(),
                'headers' => $this->filterHeaders($response->headers->all()),
                'content' => $response->getContent(),
            ];
            Cache::store($cfg['store'])->put($key, $payload, $cfg['ttl']);
        }

        return $response;
    }

    protected function isCacheableRequest($request, array $cfg): bool
    {
        if ($request->method() !== 'GET') return false;
        if ($request->ajax() || $request->expectsJson()) return false;

        $path = ltrim($request->path(), '/');
        foreach ($cfg['exclude_paths'] as $pat) {
            $pat = str_replace('\*', '.*', preg_quote($pat, '/'));
            if (preg_match('/^' . $pat . '$/i', $path)) return false;
        }

        foreach ($cfg['bypass_cookies'] as $cookie) {
            if ($request->cookies->has($cookie)) return false;
        }

        return true;
    }

    protected function isCacheableResponse(Response $response): bool
    {
        if ($response->getStatusCode() !== 200) return false;
        $type = strtolower($response->headers->get('Content-Type', ''));
        if (!Str::contains($type, 'text/html')) return false;
        return true;
    }

    protected function makeCacheKey($request, array $cfg): string
    {
        // Normaliza parámetros (quitando UTM, gclid…)
        $params = $request->query();
        $params = Arr::except($params, $cfg['ignore_params']);
        ksort($params);

        $device = '';
        if ($cfg['vary_by_device']) {
            $ua = strtolower($request->userAgent() ?? '');
            $isMobile = preg_match('/mobile|android|iphone|ipod|opera mini|iemobile/', $ua);
            $device = $isMobile ? ':m' : ':d';
        }

        $host = $request->getSchemeAndHttpHost();
        $path = '/'.ltrim($request->getPathInfo(), '/');
        $qs   = http_build_query($params);

        $fingerprint = $host.$path.($qs ? '?'.$qs : '').$device;

        return 'pagecache:'.sha1($fingerprint);
    }

    protected function filterHeaders(array $headers): array
    {
        $allowed = ['cache-control','content-type','etag','last-modified','vary'];
        $out = [];
        foreach ($headers as $k => $v) {
            if (in_array(strtolower($k), $allowed)) $out[$k] = $v;
        }
        return $out;
    }

    protected function hydrateResponse(array $payload): Response
    {
        $r = new Response($payload['content'], $payload['status']);
        foreach ($payload['headers'] as $k => $vals) {
            foreach ((array)$vals as $v) $r->headers->set($k, $v, false);
        }
        $r->headers->set('X-Page-Cache', 'HIT');
        return $r;
    }
}
