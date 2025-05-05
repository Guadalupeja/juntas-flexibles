@extends('layouts.app')

@section('title', 'Selecciona dimensiones y materiales de Junta de expansión')
@section('description', 'Junta de Expansión, selecciona las dimensiones y materiales que requieras, tipo de bridas, 
tipo de arco, normativa, amplia gama de estilos de primera calidad')


@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Junta de Expansión Modelo {{ $modelo }}",
  "description": "{{ $descripcion }}",
  "image": [
    "{{ asset($imagen_destacada) }}",
    "{{ asset($imagen_2d) }}",
    "{{ asset($imagen_diagrama) }}"
  ],
  "brand": {
    "@type": "Brand",
    "name": "BSH"
  },
  "category": "Juntas de Expansión",
  "offers": {
    "@type": "Offer",
    "url": "{{ url()->current() }}", 
    "priceCurrency": "MXN",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "BSH"
    }
  },
  "additionalProperty": [
    {
      "@type": "PropertyValue",
      "name": "Material Interior",
      "value": "Nitrilo NBR, Viton FKM, Neopreno EPDM, Teflon PTFE, Caucho natural WR, NBR Sanitario, FKM Sanitario, EPDM Sanitario, PTFE FDA"
    },
    {
      "@type": "PropertyValue",
      "name": "Material Exterior",
      "value": "Nitrilo NBR, Viton FKM, Neopreno EPDM, Teflon PTFE, Caucho natural WR, NBR Sanitario, FKM Sanitario, EPDM Sanitario, PTFE FDA"
    },
    {
      "@type": "PropertyValue",
      "name": "Normativas",
      "value": "ASME 125/150 A, ASME 250/300 A, ASME B16.47, ANSI B16.5 #150, ANSI B16.5 #300, SAE 3000, DIN 20504, DIN 2501"
    },
    {
      "@type": "PropertyValue",
      "name": "Tipo de Arco",
      "value": "Estándar, Relleno, Fluido"
    },
    {
      "@type": "PropertyValue",
      "name": "Material de las Bridas",
      "value": "Acero al carbón, Inoxidable 304, Inoxidable 316, Hule, HuleAC, HuleSS"
    },
    {
      "@type": "PropertyValue",
      "name": "Tipo de Brida",
      "value": "Giratorias, Fijas, Hule c/anillos"
    }
  ]
}
</script>
@endsection




@section('contenido')




<div id="content" class="bg-white text-gray-700 leading-relaxed font-roboto">
    <div class="max-w-screen-xl mx-auto px-4">
  
      <!-- Título principal -->
      <div class="text-center my-5">
        <h2 class="text-xl md:text-2xl font-bold text-primaryBlue">
          Modelo Seleccionado: Junta Estilo: {{ $modelo }}
        </h2>
      </div>
  
      <!-- Sección principal: imagen destacada, texto y otra imagen -->
      <!-- Ajuste del grid según los tamaños que definiste originalmente -->
      <!-- Versión original: en móviles grid de una columna, en desktop 4 columnas (1fr 2fr 1fr 1fr) -->
      <!-- A falta de una definición exacta en tailwind, optamos por md:grid-cols-[1fr_2fr_1fr_1fr] usando clases arbitrarias no es posible por defecto. -->
      <!-- Podemos simular esto con col-span y flex. Usaremos grid con clases responsivas. -->
      <!-- Suponiendo que quieres: 
           - en mobile: stack (1 columna)
           - en desktop: por ejemplo grid-cols-4 con la primera col 1fr, la segunda col-span-2, la tercera y cuarta 1fr cada una.
      -->
      <div class="grid gap-2 md:grid-cols-5 items-center justify-center font-roboto">
  
        <!-- Imagen Destacada -->
        <div class="text-center">
          <img 
            src="{{ asset($imagen_destacada) }}" 
            alt="Imagen Destacada"
            class="mx-auto w-[210px] h-[230px] transition-transform duration-300 ease-in-out hover:scale-110"
          >
        </div>
  
        <!-- Texto descriptivo (col-span-2 en desktop) -->
        <div class="text-justify md:col-span-2">
          <p class="text-[13px] m-4">
            {{ $descripcion }}
          </p>
        </div>
  
        <!-- Imagen 2D -->
        <div class="text-center">
          <img 
            src="{{ asset($imagen_2d) }}" 
            alt="Imagen 2D"
            class="mx-auto w-[210px] h-[230px] transition-transform duration-300 ease-in-out hover:scale-110"
          >
        </div>
    
  
      @if(!empty($imagenes) && is_array($imagenes))
      <section class="my-8">
        <h2 class="text-lg md:text-xl font-semibold text-primaryBlue text-center mb-4">
          Movimientos de la junta flexible:
        </h2>
      
        <div class="grid grid-cols-2 sm:grid-cols-2 gap-4 justify-items-center">
          @foreach($imagenes as $img)
            <img
              src="{{ asset($img) }}"
              alt="Movimiento Juntas de Expansión"
              class="rounded-full w-[120px] transition-transform duration-300 ease-in-out hover:scale-110"
            >
          @endforeach
        </div>
      </section>
      @endif
    </div>
  
      <!-- Filtros Diagrama -->
      <div class="w-[400px] md:w-[600px] mx-auto">
        <img 
          src="{{ asset($imagen_diagrama) }}" 
          alt="Imagen diagrama"
          class="mx-auto"
        >
      </div>

      @php
    // Convertimos la cadena del resultado en un array, asumiendo que está separado por comas.
    // Ejemplo: "1 1/4, 6, 4 5/8, 3 1/2, 4, 5/8, 2 1/2, 5/8, 1 1/8, 3/8, 1/2, 9/16"
    $valores = explode(',', $resultado);
      // Usamos array_slice para comenzar desde índice 1
  $valores_desde_1 = array_slice($valores, 1);
@endphp
<!-- Tabla Selección -->
<div id="tabla-seleccion" class="overflow-x-auto max-w-full mt-8">
    <table class="min-w-full border border-gray-300 text-[15px] font-roboto">
      @php  
      if ($modelo === '111C' || $modelo === '111E') {
          $encabezados_tabla = [
              'ø MAYOR in',
              'ø MENOR in',
              'ø LARGO in'
          ];
      } elseif ($modelo === '1110') {
          $encabezados_tabla = [
              'ø NOMINAL DN in',
              'LONGITUD L.T. STD. in',
              'ø EXTERIOR D.E. in',
              'ø CENTRO DE BARRENOS D.C.B. in',
              'BARRENOS NO.',
              'BARRENOS DIAM in',
              'ANILLOS DE RETENCIÓN',
              'DIMENSIONES A in',
              'DIMENSIONES B in',
              'DIMENSIONES C in',
              'DIMENSIONES D in',
              'DIMENSIONES E in'
          ];
      } elseif ($modelo === '1120') {
          $encabezados_tabla = [
              'ø NOMINAL DN in',
              'LONGITUD L.T. in',
              'PRESIÓN MÁXIMA LBS',
              'CAPACIDAD DE VACÍO in/Hg',
              'COMPRESIÓN in',
              'ELONGACION in',
              'LATERAL in',
              'ANGULAR No DE GRADOS',
              'TORSIONAL'
          ];
      } elseif ($modelo === '1130') {
          $encabezados_tabla = [
              'ø NOMINAL DN in',
              'LONGITUD L.T. in',
              'PRESIÓN MÁXIMA LBS',
              'CAPACIDAD DE VACÍO in/Hg',
              'COMPRESIÓN in',
              'EXTENSIÓN in',
              'LATERAL in',
              'ANGULAR No DE GRADOS',
              'TORSIONAL'
          ];
      } elseif ($modelo === '2210') {
          $encabezados_tabla = [
              'ø NOMINAL DN in',
              'LONGITUD L.T. STD. in',
              'ø EXTERIOR D.E. in',
              'ø CENTRO DE BARRENOS D.C.B. in',
              'BARRENOS NO.',
              'BARRENOS DIAM in',
              'ANILLOS DE RETENCIÓN',
              'DIMENSIONES A in',
              'DIMENSIONES B in',
              'DIMENSIONES C in',
              'DIMENSIONES D in',
              'DIMENSIONES E in'
          ];
      } else {
          $encabezados_tabla = []; 
      }
@endphp


  
    
    <thead class="bg-gray-100">
      <tr>
        @foreach($encabezados_tabla as $encabezado)
          <th class="border border-gray-300 px-4 py-2 font-bold">{{ $encabezado }}</th>
        @endforeach
      </tr>
    </thead>
      <tbody>
        <tr class="hover:bg-gray-50">
          @foreach($valores_desde_1 as $valor)
            <td class="border border-gray-300 px-4 py-2 text-center">{{ trim($valor) }}</td>
          @endforeach
        </tr>
      </tbody>
    </table>
  </div>
  
      <!-- Selecciona Configuraciones -->
      <section class="my-8">
        <h1 class="text-center text-xl md:text-2xl font-bold text-primaryBlue mb-4 font-roboto">
          Selecciona las configuraciones disponibles para este modelo:
        </h1>
        <form method="post" action="{{ route('filtros.segundaEtapa') }}" class="space-y-4" onsubmit="return validarSelectores();">
            @csrf
          <!-- Material Interior -->
          <label for="materiales">
            <h3 class="text-lg font-bold text-primaryBlue mb-2 font-roboto">Material Interior del fuelle:</h3>
          </label>
          <select name="materiales" id="materiales" class="w-full p-2 border border-gray-300 rounded-md my-2 text-primaryGray">
            <option value="seleccionar" selected>Seleccionar</option>
            <option value="Nitrilo NBR">Nitrilo NBR</option>
            <option value="Viton FKM">Viton FKM</option>
            <option value="Neopreno EPDM">Neopreno EPDM</option>
            <option value="Teflon PTFE">Teflon PTFE</option>
            <option value="Caucho natural WR">Caucho natural WR</option>
            <option value="NBR Sanitario">NBR Sanitario</option>
            <option value="FKM Sanitario">FKM Sanitario</option>
            <option value="EPDM Sanitario">EPDM Sanitario</option>
            <option value="PTFE FDA">PTFE FDA</option>
          </select>
  
          <!-- Material Exterior -->
          <label for="materiales2">
            <h3 class="text-lg font-bold text-primaryBlue font-roboto my-2">Material Exterior del fuelle:</h3>
          </label>
          <select name="materiales2" id="materiales2" class="w-full p-2 border border-gray-300 rounded-md my-2 text-primaryGray font-roboto">
            <option value="seleccionar" selected>Seleccionar</option>
            <option value="Nitrilo NBR">Nitrilo NBR</option>
            <option value="Viton FKM">Viton FKM</option>
            <option value="Neopreno EPDM">Neopreno EPDM</option>
            <option value="Teflon PTFE">Teflon PTFE</option>
            <option value="Caucho natural WR">Caucho natural WR</option>
            <option value="NBR Sanitario">NBR Sanitario</option>
            <option value="FKM Sanitario">FKM Sanitario</option>
            <option value="EPDM Sanitario">EPDM Sanitario</option>
            <option value="PTFE FDA">PTFE FDA</option>
          </select>
  
          <!-- Refuerzo del fuelle -->
          <label for="refuerzo">
            <h3 class="text-lg font-bold text-primaryBlue my-2 font-roboto">Refuerzo del fuelle:</h3>
          </label>
          <select name="refuerzo" id="refuerzo" class="w-full p-2 border border-gray-300 rounded-md my-2 text-base">
            <option value="seleccionar" selected>Seleccionar</option>
            <option value="Metalico con fibras de Nylon">Metálico con fibras de Nylon</option>
            <option value="Metalico con fibras de Aramida">Metálico con fibras de Aramida</option>
            <option value="Metalico con fibras de Kevlar">Metálico con fibras de Kevlar</option>
          </select>
  
          <!-- Tipos de arco -->
          <label for="tipos_arco">
            <h3 class="text-lg font-bold text-primaryBlue my-2 font-roboto">Tipos de arco para el Fuelle:</h3>
          </label>
          <select name="tipos_arco" id="tipos_arco" 
          class="w-full p-2 border font-roboto text-primaryGray border-gray-300 rounded-md my-2 text-base">
          <option value="seleccionar" selected>Seleccionar</option>

          @if($modelo === '2210')
            <!-- Única opción si el modelo es 2210 -->
            <option value="Fluido">Fluido</option>
          @else
            <!-- Otras opciones para modelos distintos de 2210 -->
            <option value="Estándar">Estándar</option>
            <option value="Relleno">Relleno</option>
            <option value="Fluido">Fluido</option>
          @endif
        </select>
  
          <!-- Normativa de las Bridas -->
          <label for="normativas_brida">
            <h3 class="text-lg font-bold font-roboto text-primaryBlue my-2">Normativa de las Bridas:</h3>
          </label>
          <select name="normativas_brida" id="normativas_brida" class="w-full p-2 border border-gray-300 rounded-md mt-2 font-roboto text-primaryGray">
            <option value="seleccionar" selected>Seleccionar</option>
            <option value="ASME 125/150 A">ASME 125/150 A</option>
            <option value="ASME 250/300 A">ASME 250/300 A</option>
            <option value="ASME B16.47">ASME B16.47</option>
            <option value="ANSI B16.5 #150">ANSI B16.5 #150</option>
            <option value="ANSI B16.5 #300">ANSI B16.5 #300</option>
            <option value="SAE 3000">SAE 3000</option>
            <option value="DIN 20504">DIN 20504</option>
            <option value="DIN 2501">DIN 2501</option>
          </select>
  
          <!-- Material de las Bridas -->
          <label for="material_bridas">
            <h3 class="text-lg font-bold text-primaryBlue font-roboto my-2">Material de fabricación de las bridas:</h3>
          </label>
          <select name="material_bridas" id="material_bridas" class="w-full p-2 border border-gray-300 rounded-md my-2 text-primaryGray font-roboto">
            <option value="seleccionar" selected>Seleccionar</option>
            <option value="Acero al carbón">Acero al carbón</option>
            <option value="Inoxidable 304">Inoxidable 304</option>
            <option value="Inoxidable 316">Inoxidable 316</option>
            <option value="Hule">Hule</option>
            <option value="HuleAC">Hule con anillos de retención en AC</option>
            <option value="HuleSS">Hule con anillos de retención en SS</option>
          </select>
  
          <!-- Tipo de brida -->
          <label for="tipo_brida">
            <h3 class="text-lg font-roboto font-bold text-primaryBlue my-2">Tipo de brida:</h3>
          </label>
          <select name="tipo_brida" id="tipo_brida" class="w-full p-2 border border-gray-300 rounded-md mt-2 text-primaryGray font-roboto">
            <option value="seleccionar" selected>Seleccionar</option>
            <option value="Giratorias">Giratorias</option>
            <option value="Fijas">Fijas</option>
            <option value="Hule c/anillos">Hule c/anillos</option>
          </select>
  
                <!-- Inputs Hidden con datos previos -->
                <input type="hidden" name="resultado" value="{{ $resultado }}">
                <input type="hidden" name="encabezados_tabla" value="{{ implode(',', $encabezados_tabla) }}">

                <input type="hidden" name="modelo" value="{{ $modelo }}">
                <input type="hidden" name="descripcion" value="{{ $descripcion }}">
                <input type="hidden" name="imagen_2d" value="{{ $imagen_2d }}">
                <input type="hidden" name="imagen_diagrama" value="{{ $imagen_diagrama }}">
                <input type="hidden" name="imagen_destacada" value="{{ $imagen_destacada }}">
                @foreach($imagenes as $img)
                    <input type="hidden" name="imagenes[]" value="{{ $img }}">
                @endforeach
          <!-- Botón Siguiente -->
          <div class="flex justify-end m-4">
            <input type="submit" value="Siguiente" class="bg-[#5a0f0d] text-white rounded-full py-[14px] px-[30px] hover:bg-red-800 transition-colors cursor-pointer">
          </div>
        </form>
      </section>
  
    </div>
  </div>
  



  


<!--segunda fila-->
<section class="w-full flex bg-cover bg-center bg-no-repeat items-center justify-center text-white font-roboto"
          style="
          background-image: url('img/procesadas/bombas-industriales-large.jpg');
          background-image: -webkit-image-set(
            url('img/procesadas/bombas-industriales-large.webp') type('image/webp'),
            url('img/procesadas/bombas-industriales-large.jpg') type('image/jpeg')
          );
          background-image: image-set(
            url('img/procesadas/bombas-industriales-large.webp') type('image/webp'),
            url('img/procesadas/bombas-industriales-large.jpg') type('image/jpeg')
          );
          "
          >
         <div id="contacto" class="w-[800px]">
         <h2 class="encabezado text-white m-5">¿Necesitas más información sobre las juntas de expansión? <br>
          Por favor llena el siguiente formulario y en breve un experto se comunicará contigo:</h2>
  <div class="p-5">
        <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
        <script>
          window.onload = function() {
            var script = document.createElement('script');
            script.src = '//js.hsforms.net/forms/shell.js';
            script.charset = 'utf-8';
            script.type = 'text/javascript';
            script.onload = function() {
              hbspt.forms.create({
                region: "na1",
                portalId: "7547674",
                formId: "e391047b-0ba7-411a-85bc-4c528141e149"
              });
            };
            document.body.appendChild(script);
          };


         // Función para validar selectores
        function validarSelectores() {
          var selects = ['materiales', 'materiales2', 'refuerzo', 'tipos_arco', 'normativas_brida', 'material_bridas', 'tipo_brida'];
          
          for (var i = 0; i < selects.length; i++) {
            var sel = document.getElementById(selects[i]);
            if (sel.value === 'seleccionar') {
              alert('Por favor selecciona todas las configuraciones disponibles antes de continuar.');
              sel.focus();
              return false; // Evita el envío del formulario
            }
          }
          return true; // Todos los selectores están seleccionados, permitir el envío
        }
        </script>
        </div>

</div>
</section>


  
   
  
  @endsection