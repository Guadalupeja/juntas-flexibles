<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class NitroPurge extends Command
{
    protected $signature = 'nitro:purge {url=/} {--device=all : all|m|d}';
    protected $description = 'Purgar caché de página para una URL';

    public function handle()
    {
        $url = $this->argument('url');
        $deviceOpt = $this->option('device');

        $hits = 0;
        $devices = $deviceOpt === 'all' ? ['m','d'] : [$deviceOpt];

        foreach ($devices as $dev) {
            $key = $this->keyFromUrl($url, $dev);
            if ($key && Cache::store(config('nitrolite.store'))->forget($key)) {
                $hits++;
            }
        }

        $this->info("Purgadas {$hits} variantes para {$url}.");
        return self::SUCCESS;
    }

    protected function keyFromUrl(string $absoluteUrl, string $dev): ?string
    {
        $cfg = config('nitrolite');
        $parts = parse_url($absoluteUrl);
        if (!$parts) return null;

        $host = ($parts['scheme'] ?? 'https').'://'.($parts['host'] ?? request()->getHost());
        $path = $parts['path'] ?? '/';
        parse_str($parts['query'] ?? '', $params);

        foreach ($cfg['ignore_params'] as $p) unset($params[$p]);
        ksort($params);
        $qs = http_build_query($params);

        $device = ($dev === 'm' ? ':m' : ($dev === 'd' ? ':d' : ''));
        $fingerprint = $host.$path.($qs ? '?'.$qs : '').$device;

        return 'pagecache:'.sha1($fingerprint);
    }
}
