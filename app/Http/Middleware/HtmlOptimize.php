<?php

namespace App\Http\Middleware;

use Closure;
use voku\helper\HtmlMin;
use Illuminate\Support\Str;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\BinaryFileResponse;
use Symfony\Component\HttpFoundation\StreamedResponse;

class HtmlOptimize
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        $cfg = config('nitrolite');
        if (!$cfg['minify']) {
            return $response;
        }

        // No minificar archivos/streams descargables
        if ($response instanceof BinaryFileResponse || $response instanceof StreamedResponse) {
            return $response;
        }

        // Solo HTML
        $type = strtolower($response->headers->get('Content-Type', ''));
        if (!Str::contains($type, 'text/html')) {
            return $response;
        }

        // Minificación segura
        try {
            $min = new HtmlMin();

            // === Opciones soportadas por voku/html-min ===
            $min->doOptimizeViaHtmlDomParser();          // repara/normaliza HTML antes de minificar
            $min->doRemoveComments();                    // quita comentarios
            $min->doSumUpWhitespace();                   // colapsa espacios múltiples
            $min->doRemoveWhitespaceAroundTags();        // quita espacios antes/después de tags
            $min->doOptimizeAttributes();                // ordena/limpia atributos
            $min->doRemoveHttpPrefixFromAttributes();    // http:// → // en atributos (ahorra unos bytes)
            $min->doRemoveOmittedQuotes();               // elimina comillas opcionales seguras
            $min->doRemoveOmittedHtmlTags();             // elimina tags opcionales (p.ej. </li>)

            // >>> IMPORTANTE: NO existe doRemoveWhitespaceAroundAttributes(), por eso daba error <<<

            $html = $response->getContent();
            $minified = $min->minify($html);

            // Solo aplica si realmente es más corto (prudente en páginas ya pequeñas)
            if (is_string($minified) && strlen($minified) > 0 && strlen($minified) <= strlen($html)) {
                $response->setContent($minified);
                $response->headers->set('X-HTML-Optimized', '1');
            }
        } catch (\Throwable $e) {
            // En producción, mejor no romper la página si algo sale mal
            // Puedes loguearlo si lo deseas:
            // \Log::warning('HtmlOptimize failed: ' . $e->getMessage());
        }

        return $response;
    }
}
