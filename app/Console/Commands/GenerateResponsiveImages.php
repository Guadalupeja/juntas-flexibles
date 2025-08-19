<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;

class GenerateResponsiveImages extends Command
{
    protected $signature = 'images:generate-responsive
                            {--force : Reprocesa y sobrescribe archivos existentes}
                            {--only-alpha : Solo procesa fuentes con transparencia}
                            {--bg=#ffffff : Color de fondo para aplanar JPG (hex o css, ej. #ffffff)}
                            {--quality-jpg=82 : Calidad JPG 0-100}
                            {--quality-webp=70 : Calidad WebP 0-100}
                            {--quality-avif=50 : Calidad AVIF 0-100}';

    protected $description = 'Genera versiones responsive en JPG, WebP y AVIF (con aplanado de alfa en JPG).';

    /** @var bool|null */
    protected $avifSupported = null;

    public function handle()
    {
        $originalImagesPath  = public_path('img');             // originales
        $processedImagesPath = public_path('img/procesadas');  // salida

        if (!File::exists($processedImagesPath)) {
            File::makeDirectory($processedImagesPath, 0755, true);
        }

        // Tamaños a generar
        $sizes = [
            'small'  => 480,
            'medium' => 800,
            'large'  => 1200,
        ];

        // Opciones
        $qJpg      = (int) $this->option('quality-jpg');
        $qWebp     = (int) $this->option('quality-webp');
        $qAvif     = (int) $this->option('quality-avif');
        $force     = (bool) $this->option('force');
        $onlyAlpha = (bool) $this->option('only-alpha');
        $bgColor   = (string) $this->option('bg');

        // Entradas válidas
        $images = collect(File::files($originalImagesPath))->filter(function ($file) {
            return in_array(strtolower($file->getExtension()), ['jpg','jpeg','png','webp']);
        });

        // Si piden solo con alfa, filtramos aquí
        if ($onlyAlpha) {
            $images = $images->filter(function ($file) {
                $ext = strtolower($file->getExtension());
                if (in_array($ext, ['png', 'webp'])) {
                    // Con Imagick podemos detectar alfa real
                    try {
                        $img = Image::make($file->getPathname());
                        if (config('image.driver') === 'imagick' && method_exists($img->getCore(), 'getImageAlphaChannel')) {
                            return (bool) $img->getCore()->getImageAlphaChannel();
                        }
                        // Con GD no hay API; asumimos que png/webp podrían tener alfa
                        return true;
                    } catch (\Throwable $e) {
                        return false;
                    }
                }
                return false; // jpg/jpeg nunca tienen alfa de origen
            });
        }

        $this->line('Procesando desde: '.$originalImagesPath);
        $this->line('Salida en: '.$processedImagesPath);
        $this->line('Driver Intervention: '.config('image.driver', 'gd'));
        $this->line('AVIF soportado: '.($this->supportsAvif() ? 'sí' : 'no'));

        $count = 0;

        foreach ($images as $image) {
            $filename = pathinfo($image->getFilename(), PATHINFO_FILENAME);
            $ext      = strtolower($image->getExtension());

            foreach ($sizes as $sizeName => $width) {

                $jpgPath  = "{$processedImagesPath}/{$filename}-{$sizeName}.jpg";
                $webpPath = "{$processedImagesPath}/{$filename}-{$sizeName}.webp";
                $avifPath = "{$processedImagesPath}/{$filename}-{$sizeName}.avif";

                if (!$force && File::exists($jpgPath) && File::exists($webpPath) && ($this->supportsAvif() ? File::exists($avifPath) : true)) {
                    $this->line("↷ {$filename}-{$sizeName} (ya existía, saltando)");
                    continue;
                }

                // Base redimensionada (respeta orientación EXIF)
                $imgBase = Image::make($image->getPathname())
                    ->orientate()
                    ->resize($width, null, function ($c) {
                        $c->aspectRatio();
                        $c->upsize();
                    });

                // ===== JPG (aplanado si hay alfa de origen) =====
                try {
                    $imgJpg = clone $imgBase;

                    if ($this->sourceHasAlpha($ext, $imgJpg)) {
                        // Aplana sobre el color elegido para evitar "negro"
                        $canvas = Image::canvas($imgJpg->width(), $imgJpg->height(), $bgColor);
                        $canvas->insert($imgJpg, 'top-left', 0, 0);
                        $imgJpg = $canvas;
                    }

                    if (method_exists($imgJpg, 'interlace')) {
                        $imgJpg->interlace(); // JPG progresivo
                    }

                    $imgJpg->encode('jpg', $qJpg)->save($jpgPath);
                } catch (\Throwable $e) {
                    $this->warn("× Error JPG {$filename}-{$sizeName}: ".$e->getMessage());
                }

                // ===== WebP (conserva alfa) =====
                try {
                    $imgWebp = clone $imgBase;
                    $imgWebp->encode('webp', $qWebp)->save($webpPath);
                } catch (\Throwable $e) {
                    $this->warn("× Error WebP {$filename}-{$sizeName}: ".$e->getMessage());
                }

                // ===== AVIF (si hay soporte; conserva alfa) =====
                if ($this->supportsAvif()) {
                    try {
                        $imgAvif = clone $imgBase;
                        $imgAvif->encode('avif', $qAvif)->save($avifPath);
                    } catch (\Throwable $e) {
                        $this->warn("× Error AVIF {$filename}-{$sizeName}: ".$e->getMessage());
                    }
                } else {
                    // Limpia restos si existían
                    if (File::exists($avifPath)) {
                        @File::delete($avifPath);
                    }
                }

                $count++;
                $this->line("✓ {$filename}-{$sizeName} → JPG({$qJpg}), WebP({$qWebp})".($this->supportsAvif() ? ", AVIF({$qAvif})" : ""));
            }
        }

        $this->info("Imágenes procesadas: {$count}");
        if (!$this->supportsAvif()) {
            $this->warn("AVISO: AVIF NO soportado por tu stack actual (GD sin libavif o Imagick sin libheif).");
        }
    }

    /**
     * ¿La fuente tiene canal alfa?
     * - Con Imagick: lectura real del canal.
     * - Con GD: heurística por extensión (png/webp).
     */
    protected function sourceHasAlpha(string $ext, \Intervention\Image\Image $img): bool
    {
        try {
            if (config('image.driver') === 'imagick' && method_exists($img->getCore(), 'getImageAlphaChannel')) {
                return (bool) $img->getCore()->getImageAlphaChannel();
            }
        } catch (\Throwable $e) {
            // Ignorar y seguir con heurística por extensión
        }
        return in_array($ext, ['png', 'webp']);
    }

    /**
     * Detecta una vez si el entorno puede codificar AVIF.
     */
    protected function supportsAvif(): bool
    {
        if ($this->avifSupported !== null) return $this->avifSupported;
        try {
            $probe = Image::canvas(1, 1, '#ffffff')->encode('avif', 50);
            $this->avifSupported = $probe !== null && strlen((string) $probe) > 0;
        } catch (\Throwable $e) {
            $this->avifSupported = false;
        }
        return $this->avifSupported;
    }
}

