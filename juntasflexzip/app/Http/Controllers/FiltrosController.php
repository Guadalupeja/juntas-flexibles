<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FiltrosController extends Controller
{
    public function filtrosSeleccion(Request $request)
    {
        // Validar los datos recibidos
        $request->validate([
            'resultado' => 'required',
            'modelo' => 'required',
            'descripcion' => 'required',
            'imagen_2d' => 'required',
            'imagen_diagrama' => 'required',
            'imagen_destacada' => 'required',
            'imagenes' => 'required|array', // Validamos que imágenes sea un array
            'imagenes.*' => 'required|string', // Cada imagen debe ser una cadena (URL)
            'encabezados_tabla' => 'required|string', // Validamos que los encabezados sean una cadena

        ]);

        // Extraer los datos del formulario
        $datos = $request->only([
            'boton_presionado',
            'resultado',
            'encabezados_tabla',
            'modelo',
            'descripcion',
            'imagen_2d',
            'imagen_diagrama',
            'imagen_destacada',
            'imagenes' // Importante incluir el campo imagenes

        ]);
        
        // Dividimos los encabezados por comas en un array
        $datos['encabezados_tabla'] = explode(',', $datos['encabezados_tabla']);
        
        //  Pasar los datos a la vista
        return view('filtros-juntas', $datos);
    }


    public function filtrosSeleccionSegundaEtapa(Request $request)
{
    // Validar datos enviados desde filtros-juntas
    $request->validate([
        'modelo' => 'required',
        'descripcion' => 'required',
        'imagen_2d' => 'required',
        'imagen_diagrama' => 'required',
        'imagen_destacada' => 'required',
        'imagenes' => 'required|array',
        'imagenes.*' => 'required|string',
        // Validaciones para los selectores
        'materiales' => 'required|not_in:seleccionar',
        'materiales2' => 'required|not_in:seleccionar',
        'refuerzo' => 'required|not_in:seleccionar',
        'tipos_arco' => 'required|not_in:seleccionar',
        'normativas_brida' => 'required|not_in:seleccionar',
        'material_bridas' => 'required|not_in:seleccionar',
        'tipo_brida' => 'required|not_in:seleccionar',
        'encabezados_tabla' => 'required|string', // Validar encabezados como cadena

    ]);

    // Obtener todos los datos necesarios
    $datos = $request->only([
        'modelo',
        'descripcion',
        'imagen_2d',
        'imagen_diagrama',
        'imagen_destacada',
        'imagenes',
        'materiales',
        'materiales2',
        'refuerzo',
        'tipos_arco',
        'normativas_brida',
        'material_bridas',
        'tipo_brida',
        'resultado',
        'encabezados_tabla', // Incluir los encabezados
    ]);
// Convertimos los encabezados en un array
$datos['encabezados_tabla'] = explode(',', $datos['encabezados_tabla']);
$datos['resultado'] = explode(',', $datos['resultado']); // Convertir resultado a array


            // Función auxiliar para obtener rango de temperatura
    $getTemperatura = function($material) {
        switch ($material) {
            case "Nitrilo NBR":
                return "-30ºC a 100ºC";
            case "Viton FKM":
                return "-10ºC a 200ºC";
            case "Neopreno EPDM":
                return "-50ºC a 150ºC";
            case "Teflon PTFE":
                return "-70ºC a 260ºC";
            case "Caucho natural WR":
                return "-10ºC a 80ºC";
            case "NBR Sanitario":
                return "-30ºC a 100ºC";
            case "FKM Sanitario":
                return "-10ºC a 200ºC";
            case "EPDM Sanitario":
                return "-50ºC a 150ºC";
            case "PTFE FDA":
                return "-70ºC a 260ºC";
            default:
                return "Seleccionar una opción";
        }
    };

    // Calcular los rangos de temperatura basados en los materiales elegidos
    $temperatura_info = $getTemperatura($datos['materiales2']);
    $temperatura_info2 = $getTemperatura($datos['materiales']);

    // Agregar estas variables al arreglo de datos que se pasarán a la vista
    $datos['temperatura_info'] = $temperatura_info;
    $datos['temperatura_info2'] = $temperatura_info2;

    // Ahora pasas $datos a tu vista seccion-cuatro
    return view('seccion-cuatro', $datos);
}




}
