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

        // Generar el número de parte (única fuente de verdad: el template solo lo imprime).
        $data['numero_parte'] = $this->construirNumeroParte($data);

        // Generar el PDF con DOMPDF
        $pdf = Pdf::loadView('cotizacion-generada', $data)->setPaper('letter', 'portrait');

        // Es una ficha técnica, no una cotización: prefijo FT- e incluye el número de
        // parte para que el nombre del archivo sea más específico.
        $numeroParteArchivo = str_replace('/', '-', $data['numero_parte']);

        return $pdf->stream("FT-{$numeroParteArchivo}-" . date('Y') . '.pdf');
    }

    /**
     * Construye el número de parte de forma determinista:
     * modelo + medidas + material(es) + clase/normativa de brida.
     *
     * La misma combinación de estos datos SIEMPRE debe producir el mismo
     * número de parte; si cambia cualquiera de ellos (incluida la
     * normativa/clase de brida), el número debe cambiar también. No se usan
     * valores aleatorios ni el tipo de brida (Fijas/Locas) como sustituto de
     * la clase/normativa.
     */
    private function construirNumeroParte(array $data): string
    {
        $modelo = trim((string) $data['modelo']);
        $productos = $data['productos_seleccionados'];

        // La estructura dimensional depende del modelo: 111C y 111E se
        // describen con diámetro mayor, diámetro menor y largo (3 valores);
        // el resto de los modelos (1110, 1120, 1130, 2210, etc.) usan
        // diámetro y largo (2 valores) como sus dos primeras posiciones.
        // No asumir que [0]/[1] siempre son "diámetro"/"largo" sin revisar el modelo.
        $cantidadMedidas = in_array($modelo, ['111C', '111E'], true) ? 3 : 2;

        $medidas = array_map(
            fn ($valor) => str_replace(' ', '', trim((string) $valor)),
            array_slice($productos, 0, $cantidadMedidas)
        );
        $medidasCodigo = implode('X', $medidas);

        // Material interior y exterior del fuelle: ambos participan. Si son
        // el mismo material se colapsan en un solo código (igual que ya se
        // muestra en el resto de la ficha); si son distintos, se combinan
        // para diferenciar configuraciones de fabricación distintas.
        $materiales = (string) $data['materiales'];
        $materiales2 = (string) $data['materiales2'];
        $codigoMaterial1 = strtoupper(substr($materiales, 0, 2));
        $codigoMaterial2 = strtoupper(substr($materiales2, 0, 2));
        $materialCodigo = ($materiales === $materiales2)
            ? $codigoMaterial1
            : $codigoMaterial1 . $codigoMaterial2;

        $normaCodigo = $this->codigoNormativaBrida((string) $data['normativas_brida']);

        return $modelo . '/' . $medidasCodigo . '/' . $materialCodigo . '/' . $normaCodigo;
    }

    /**
     * Código corto pero inequívoco para cada normativa/clase de brida.
     * No reduce todas las normas a "150"/"300": cada una tiene su propio
     * código para evitar colisiones entre normativas distintas.
     */
    private function codigoNormativaBrida(string $normativa): string
    {
        $normativa = trim($normativa);

        $mapa = [
            'ASME 125/150 A' => 'ASME125A',
            'ASME 250/300 A' => 'ASME250A',
            'ASME B16.47' => 'ASMEB1647',
            'ANSI B16.5 #150' => 'ANSI150',
            'ANSI B16.5 #300' => 'ANSI300',
            'SAE 3000' => 'SAE3000',
            'DIN 20504' => 'DIN20504',
            'DIN 2501' => 'DIN2501',
        ];

        if (isset($mapa[$normativa])) {
            return $mapa[$normativa];
        }

        // Normativa no contemplada en el mapa de arriba: código determinista
        // de respaldo (nunca aleatorio), quitando espacios/símbolos.
        $codigo = strtoupper(preg_replace('/[^A-Za-z0-9]/', '', $normativa));

        return $codigo !== '' ? $codigo : 'NA';
    }
}