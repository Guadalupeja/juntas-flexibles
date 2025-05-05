<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Cotización Junta Flexible | BSH</title>
    <style>
        /* Estilo al PDF GENERADO */
        header, .encabezado, .encabezado table,
        .encabezado table tr {
            margin: 0;
        }
        .encabezado ul {
            margin-bottom: 6px;
        }
        .encabezado li {
            list-style: none;
            line-height: 14px;
            font-size: 12px;
        }
        .seccion_1 {
            text-align: center;
            margin: 0;
        }
        .seccion_1 h1 {
            font-size: 16px;
            font-family: Arial, Helvetica, sans-serif;
            margin: 0 auto;
        }
        .encabezado img {
            width: 220px;
        }
        .seccion_2 {
            margin: 0;
        }
        .seccion_2 img {
            margin-top: 0;
            margin-bottom: 0;
        }
        .seccion_2 p {
            font-size: 13px;
            text-align: justify;
            font-family: Arial, Helvetica, sans-serif;
        }
                /* Estilo específico para la imagen destacada */
                .imagen-destacada {
            width: 100%;  /* Ajusta el tamaño al 100% del contenedor */
            max-width: 150px;  /* Establece un ancho máximo */
            height: auto;  /* Mantén la proporción */
            margin-top: 0;
            margin-bottom: 0;
        }
        .seccion_3 {
            margin: 0;
        }
        .seccion_3 .materiales {
            margin-top: 0;
            margin-bottom: 0;
        }
        .seccion_3 li {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 13px;
            text-align: justify;
        }
        .seccion_3 img {
            width: 80px;
        }
        .seccion_3 .diagrama-pdf {
            width: 350px;
        }
        .seccion_3 h3 {
            margin-top: 0;
            margin-bottom: 15px;
        }
        .seccion_4 li {
            font-size: 13px;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: lighter;
            list-style: none;
            line-height: 17px;
        }
        .seccion_4 img {
            width: 250px;
            margin: 0;
        }
        .seccion_4 ul {
            margin: 0;
        }
        .rangos {
            margin: 0;
        }
        .rangos ul {
            margin: 5px 0 0 0;
        }
        .rangos li {
            font-size: 13px;
            font-family: Arial, Helvetica, sans-serif;
            list-style: none;
        }
        .parrafo_seleccion {
            margin: 50px;
            font-size: 20px;
        }
        .footer {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }
        .footer img {
            width: 100px;
        }
    </style>
</head>
<body>
    <header>
        <div class="encabezado">
            <table width="100%">
                <tr>
                    <td width="60%">
                        <!-- Logotipo -->
                        <img src="{{ $logo }}" alt="Logotipo">
                    </td>
                    <td>
                        <ul>
                            <li>Calle Limón No. 1404, Ampliación</li>
                            <li>Monte Alto Altamira Tamaulipas.</li>
                            <li>E-mail: bsh@bombasellos.com.mx</li>
                            <li>RFC: BSH100430862</li>
                            <li>T. 55-5752-1715</li>
                            <li><a href="http://www.bombasellos.com.mx">www.bombasellos.com.mx</a></li>
                        </ul>
                    </td>
                </tr>
            </table>
        </div>
        <hr style="border-color: #174ec9;">
    </header>

    <div class="seccion_1">
        <h1>FICHA TÉCNICA JUNTA DE EXPANSIÓN ESTILO {{ $modelo }}</h1>
    </div>

    <section class="seccion_2">
        <table width="100%">
            <tr>
                <td width="25%">
                    <!-- Imagen 3D de la junta -->
                    <img src="{{ $imagen_destacada }}" alt="Imagen Destacada" class="imagen-destacada">                </td>
                <td width="75%">
                    <p>{{ $descripcion }}</p>
                </td>
            </tr>
        </table>
    </section>

    <hr style="border-color: #174ec9;">
    <section class="seccion_3">
        <table width="100%">
            <tr>
                <td class="galeriaPDF" width="50%">
                    <h3 style="font-size: 16px; font-family: Arial, sans-serif; text-align: center;">Rango de Movimientos del Estilo</h3>
                    <div>
                        @if(!empty($imagenes))
                        @foreach($imagenes as $imagen)
                            <img src="{{ $imagen }}" alt="Imagen">
                        @endforeach
                    @endif
                        <img class="diagrama-pdf" src="{{ $imagen_diagrama }}" alt="Imagen Diagrama">
                    </div>
                </td>
                <td class="materiales" width="50%">
                    <ul>
                        <h3 style="font-size: 16px; font-family: Arial, sans-serif; text-align: center;">Materiales y Bridas</h3>
                        <li>Material Interior del Fuelle: {{ $materiales }}</li>
                        <li>Material Exterior del Fuelle: {{ $materiales2 }}</li>
                        <li>Refuerzo del Fuelle: {{ $refuerzo }}</li>
                        <li>Tipo de arco para el Fuelle: {{ $tipos_arco }}</li>
                        <li>Material de fabricación de las bridas: {{ $material_bridas }}</li>
                        <li>Tipo de brida: {{ $tipo_brida }}</li>
                    </ul>
                </td>
            </tr>
        </table>
    </section>

    <hr style="border-color: #174ec9;">
    <div class="seccion_4">
        <table width="100%">
            <tr>
                <td>
                    <h3 style="font-size: 16px; font-family: Arial, sans-serif; text-align: center;">Dimensiones y Rango Operativo</h3>
                    <ul>
                        @foreach ($encabezados_tabla as $key => $encabezado)
                            <li><strong>{{ $encabezado }}:</strong> {{ $productos_seleccionados[$key] ?? '' }}</li>
                        @endforeach
                    </ul>
                </td>
                <td width="50%">
                    <!-- Imagen 2D de la junta -->
                    <img src="{{ $imagen_2d }}" alt="Imagen 2D">
                </td>
            </tr>
        </table>
    </div>

    <div class="rangos">
        <ul>
            @if ($materiales == $materiales2)
                <li>{{ $materiales }}: <strong>{{ $temperatura_info2 }}</strong></li>
            @else
                <li>{{ $materiales }}: <strong>{{ $temperatura_info2 }}</strong>; {{ $materiales2 }}: <strong>{{ $temperatura_info }}</strong></li>
            @endif
            <li>Presión Máxima de diseño, Vacío máximo de diseño y rango de movimientos acorde a Normativa seleccionada: <strong>{{ $normativas_brida }}</strong></li>
        </ul>
    </div>

    <hr style="border-color: #174ec9;">
    <footer class="footer">
        <table width="100%">
            <tr>
                <td width="20%">
                    <img src="{{ $logo_footer }}" alt="Logo-footer">
                </td>
                <td width="80%">
                    @php
                    $current_date = date('d/m/Y'); 
                
                    // Convertir los dos primeros dígitos de cada variable a mayúsculas
                    $materiales_dos_digitos = strtoupper(substr($materiales, 0, 2));  // e.g., "NI" para "Nitrilo NBR"
                    $tipo_brida_dos_digitos = strtoupper(substr($tipo_brida, 0, 2)); // e.g., "FI" para "Fijas"
                
                    // Combinar los primeros dos elementos de $productos_seleccionados (eliminando espacios)
                    // asumiendo que $productos_seleccionados[0] = "72" y [1] = "21"
                    $first = $productos_seleccionados[0] ?? '';
                    $second = $productos_seleccionados[1] ?? '';
                    $output = str_replace(' ', '', $first) . str_replace(' ', '', $second);
                
                    // Crear el número de parte con los dos primeros dígitos de $materiales y $tipo_brida
                    $numero_parte = $modelo . '/' . $output . '/' . $materiales_dos_digitos . '/' . $tipo_brida_dos_digitos;
                @endphp
                
                Fecha de elaboración: {{ $current_date }}<br>
                Número de parte: {{ $numero_parte }}<br><br>

                    Esta Ficha Técnica es un instrumento informativo; 
                    Las configuraciones y rangos operativos reales podrían variar acorde a otras especificaciones del cliente para la fabricación,
                    así como particularidades de su aplicación, instalación, proceso.
                </td>
            </tr>
        </table>
    </footer>
</body>
</html>