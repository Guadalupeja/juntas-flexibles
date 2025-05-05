<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class PdfController extends Controller
{
    public function generarPDF()
    {
        set_time_limit(600); // Extiende el tiempo de ejecución

        // Ruta de la imagen
        $path = public_path('img/logo.jpg');

        // Verificar si el archivo existe
        if (!file_exists($path)) {
            abort(404, 'La imagen no se encuentra en la ruta especificada: ' . $path);
        }

        // Convertir la imagen a Base64
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $base64Image = 'data:image/' . $type . ';base64,' . base64_encode($data);

        // Datos que quieres pasar a la vista
        $data = [
            'titulo' => 'Mi PDF Básico',
            'imagen' => $base64Image, // Imagen en formato Base64
        ];

        // Generar el PDF
        $pdf = Pdf::loadView('pdf.ejemplo', $data)
            ->setOptions([
                'isRemoteEnabled' => true,
                'debugPng' => true,
                'debugCss' => true,
                'debugLayout' => true,
                'debugKeepTemp' => true,
                'logOutputFile' => storage_path('logs/dompdf_debug.log'),
            ]);

        // Devolver el PDF al navegador
        return $pdf->stream('ejemplo.pdf');
    }
}
