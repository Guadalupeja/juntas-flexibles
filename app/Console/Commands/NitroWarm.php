<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class NitroWarm extends Command
{
    protected $signature = 'nitro:warm {--urls=* : Lista de URLs absolutas a precargar}';
    protected $description = 'Precarga la caché solicitando URLs (file_get_contents / cURL)';

    public function handle()
    {
        // 1) Si no pasan --urls, usamos tus rutas públicas GET
        $urls = $this->option('urls');
        if (empty($urls)) {
            $base = rtrim(config('app.url'), '/');

            // Tus rutas GET (las del PaginasController, etc.). Evito PDF y POST.
            $paths = [
                '/', // inicio
                '/selecciona-juntas-de-expansion',
                '/junta-flexible-bsh-1110',
                '/junta-flexible-bsh-111c',
                '/junta-flexible-bsh-111e',
                '/junta-flexible-bsh-1120',
                '/junta-flexible-bsh-1130',
                '/junta-flexible-bsh-2210',
                '/acerca',
                '/contact',
                '/estilos-juntas-de-expansion-bsh',
                '/gracias',
                '/aviso-de-privacidad',
                '/2022/11/28/como-seleccionar-adecuadamente-una-junta-de-expansion',
                '/preguntas-frecuentes',
                '/2023/06/29/de-que-materiales-estan-hechas-las-juntas-de-expansion',
                '/2023/07/26/que-es-una-junta-de-expansion-bridada/',
                '/2023/09/08/guia-de-juntas-de-expansion-medidas-comunes-y-su-importancia/',
            ];

            $urls = array_map(
                fn ($p) => $base . '/' . ltrim($p, '/'),
                $paths
            );
        }

        $this->info('Warming cache for ' . count($urls) . ' URLs...');

        foreach ($urls as $u) {
            $status = $this->hit($u);
            if ($status) {
                $this->info("Warmed: {$u} [{$status}]");
            } else {
                $this->error("Fail: {$u}");
            }
        }

        return self::SUCCESS;
    }

    /**
     * Solicita la URL con timeout corto y devuelve el status HTTP (p. ej. "HTTP/1.1 200 OK").
     * Intenta primero file_get_contents y, si no está permitida, usa cURL.
     */
    protected function hit(string $url): ?string
    {
        $status = null;

        // --- Contexto para file_get_contents ---
        $context = stream_context_create([
            'http' => [
                'method'        => 'GET',
                'header'        => "User-Agent: NitroWarm/1.0\r\nAccept: text/html\r\n",
                'timeout'       => 6,
                'ignore_errors' => true, // permite leer body incluso en 404/500 (queremos forzar cache)
            ],
            'ssl' => [
                'verify_peer'      => true,
                'verify_peer_name' => true,
            ],
        ]);

        // 1) file_get_contents (rápido y suficiente)
        if (ini_get('allow_url_fopen')) {
            @file_get_contents($url, false, $context);
            $status = $this->parseStatusFromHttpResponseHeader();
        }

        // 2) Fallback a cURL si lo anterior no funcionó
        if (!$status && function_exists('curl_init')) {
            $ch = curl_init($url);
            curl_setopt_array($ch, [
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_SSL_VERIFYPEER => true,
                CURLOPT_SSL_VERIFYHOST => 2,
                CURLOPT_TIMEOUT        => 6,
                CURLOPT_USERAGENT      => 'NitroWarm/1.0',
                CURLOPT_HEADER         => true, // para leer status line
                CURLOPT_NOBODY         => true, // solo headers
            ]);
            @curl_exec($ch);
            $code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
            $status = $code ? ('HTTP ' . $code) : null;
            curl_close($ch);
        }

        return $status;
    }

    protected function parseStatusFromHttpResponseHeader(): ?string
    {
        // $http_response_header es global creada por file_get_contents
        if (!isset($http_response_header) || !is_array($http_response_header)) {
            return null;
        }
        // primera línea, p. ej.: "HTTP/1.1 200 OK"
        return $http_response_header[0] ?? null;
    }
}
