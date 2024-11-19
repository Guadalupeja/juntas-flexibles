<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\File;


class GenerateResponsiveImages extends Command
{
    protected $signature = 'images:generate-responsive';
    protected $description = 'Genera versiones en webp y diferentes tamaños de las imágenes';

    public function handle()
    {
        // Directorio donde están tus imágenes originales
        $originalImagesPath = public_path('img');
        // Directorio donde guardarás las imágenes procesadas
        $processedImagesPath = public_path('img/procesadas');

        // Asegúrate de que el directorio de destino exista
        if (!File::exists($processedImagesPath)) {
            File::makeDirectory($processedImagesPath, 0755, true);
        }

        // Tamaños que deseas generar
        $sizes = [
            'small' => 480,
            'medium' => 800,
            'large' => 1200,
        ];

        // Obtener todas las imágenes jpg del directorio original
        $images = File::files($originalImagesPath);

        foreach ($images as $image) {
            $filename = pathinfo($image->getFilename(), PATHINFO_FILENAME);

            foreach ($sizes as $sizeName => $width) {
                // Redimensionar y guardar en jpg
                $img = Image::make($image->getPathname())
                    ->resize($width, null, function ($constraint) {
                        $constraint->aspectRatio();
                        $constraint->upsize();
                    });

                $jpgPath = $processedImagesPath . "/{$filename}-{$sizeName}.jpg";
                $img->save($jpgPath, 80); // Calidad 80 para jpg

                // Guardar en webp
                $webpPath = $processedImagesPath . "/{$filename}-{$sizeName}.webp";
                $img->encode('webp', 80)->save($webpPath);
            }
        }

        $this->info('Imágenes procesadas correctamente.');
    }
}

