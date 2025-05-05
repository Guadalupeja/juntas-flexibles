<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf; // Importar DomPDF

class CotizacionController extends Controller
{
    public function generarCotizacion(Request $request)
    {
        set_time_limit(600); // Extiende el tiempo de ejecución

        // Validación de los datos recibidos
        $request->validate([
            'modelo' => 'required|string',
            'descripcion' => 'required|string',
            'materiales' => 'required|string',
            'materiales2' => 'required|string',
            'refuerzo' => 'required|string',
            'tipos_arco' => 'required|string',
            'normativas_brida' => 'required|string',
            'material_bridas' => 'required|string',
            'tipo_brida' => 'required|string',
            'temperatura_info' => 'required|string',
            'temperatura_info2' => 'required|string',
            'imagen_2d' => 'required|string',
            'imagen_diagrama' => 'required|string',
            'imagen_destacada' => 'required|string',
            'imagenes' => 'required|array', // Validar que imágenes sea un array
            'imagenes.*' => 'required|string', // Validar que cada imagen sea una cadena (URL)
            'encabezados_tabla' => 'required|string',
            'productos_seleccionados' => 'required|string',
        ]);

        $data = $request->all();

        // Convertir URLs de imágenes en rutas de archivos locales
        $data['imagen_destacada'] = public_path('img/procesadas/' . basename($data['imagen_destacada']));
        $data['imagen_diagrama'] = public_path('img/procesadas/' . basename($data['imagen_diagrama']));
        $data['imagen_2d'] = public_path('img/procesadas/' . basename($data['imagen_2d']));
        $data['logo'] = public_path('img/logo.jpeg');  // Añadir ruta absoluta para el logo
        $data['logo_footer'] = public_path('img/logo-bsh-footer.png');  // Añadir ruta absoluta para el logo


        // Convertir otros datos dinámicos si son necesarios
        $data['productos_seleccionados'] = explode(',', $data['productos_seleccionados']);
        $data['encabezados_tabla'] = explode(',', $data['encabezados_tabla']);


        // Incluir las imágenes en el array de datos
        $data['imagenes'] = array_map(function($imagen) {
            return public_path('img/procesadas/' . basename($imagen));
        }, $data['imagenes']);

        // Generar el número de parte
        $output = ''; // Variable para almacenar la cadena resultante
        // Iterar sobre los primeros cuatro elementos de productos_seleccionados
        for ($i = 0; $i < min(4, count($data['productos_seleccionados'])); $i++) {
            // Concatenar cada producto en la variable output
            $output .= str_replace(' ', '', $data['productos_seleccionados'][$i]);
        }
        // Añadir el número de parte a los datos
        $data['numero_parte'] = $data['modelo'] . $output;



        // Generar el PDF con DOMPDF
        $pdf = Pdf::loadView('cotizacion-generada', $data)->setPaper('letter', 'portrait');

        return $pdf->stream("Cotizacion-{$data['modelo']}-".date("Y").".pdf");
    }
}