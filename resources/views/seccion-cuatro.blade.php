@extends('layouts.app')

@section('title', 'Selección total de la Junta de Expansión que requieres | BSH')
@section('description', 'Selección total de la Junta de Expansión que requieres, configuración de bridas, materiales, 
dimensiones, normativa, intervalos de temperatura de los materiales')


@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Junta de Expansión estilo {{ $modelo }}",
  "description": "{{ Str::limit($descripcion, 160) }}",
  "image": [
    "{{ asset($imagen_destacada) }}"
    @if(!empty($imagenes))
    @foreach($imagenes as $img)
    , "{{ asset($img) }}"
    @endforeach
    @endif
  ],
  "brand": {
    "@type": "Brand",
    "name": "BSH"
  },
  "model": "{{ $modelo }}",
  "category": "Juntas de Expansión",
  "offers": {
    "@type": "Offer",
    "url": "https://juntasflexibles.com/producto/juntas-de-expansion-{{ $modelo }}",
    "priceCurrency": "MXN",
    "price": "0", 
    "priceValidUntil": "2025-12-31",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "BSH"
    }
  }
}
</script>
@endsection



@section('contenido')

<div class="bg-white text-gray-700 font-roboto leading-relaxed lg:w-[1140px] mx-auto">
    <div class="container mx-auto px-4">
     
      <h1 class="text-center text-primaryBlue font-bold mt-8 mb-4 text-xl md:text-2xl">Selección total para Junta estilo:  {{ $modelo }}</h1>
    
      <div class="grid gap-4 lg:grid-cols-4 grid-cols-1 items-center justify-center mb-8">
        <div class="col-span-1 flex justify-center">
          <img  src="{{ asset($imagen_destacada) }}" 
               alt="Imagen Destacada" 
               class="w-[210px] h-[230px] transition-transform duration-300 hover:scale-110" />
        </div>
        <div class="md:col-span-3 font-roboto text-primaryGray text-[15px]">
          <p class="text-justify mx-4">
            {{ $descripcion }}
          </p>
        </div>
      </div>

      
      <section class="md:grid md:grid-cols-2 gap-8 font-roboto">
        <section class="selectores space-y-2">
          <h2 class="text-primaryBlue font-bold text-lg md:text-xl text-center md:mb-6">
            Configuración de bridas y materiales:
          </h2>
          <h3 class="text-sm font-light">Material interior del fuelle: 
            <span class="font-bold">{{ $materiales }}</span>
          </h3>
          <h3 class="text-sm font-light">Material exterior del fuelle: 
            <span class="font-bold">{{ $materiales2 }}</span>
          </h3>
      <br>
          @if ($materiales == $materiales2)
            <h3 class="text-sm font-light"><span class="font-bold">
              -Intervalo de Temperatura para fluidos con buena compatibilidad química con el material:
            </span>
            </h3>
            <h3 class="text-sm font-light">{{ $materiales }}: <strong class="font-bold">{{ $temperatura_info2 }}</strong></h3>
          @else
            <h3 class="text-sm font-light"><span class="font-bold">
              -Intervalo de Temperatura para fluidos con buena compatibilidad química con el material:
            </span>
            </h3>
            <h3 class="text-sm font-light">{{ $materiales }}: <strong class="font-bold">{{ $temperatura_info2 }}</strong></h3>
            <h3 class="text-sm font-light">{{ $materiales2 }}: <strong class="font-bold">{{ $temperatura_info }}</strong></h3>
          @endif
      <br>
          <h3 class="text-sm font-light">Refuerzo del fuelle: <strong class="font-bold">{{ $refuerzo }}</strong></h3>
          <h3 class="text-sm font-light">Tipos de arco para el Fuelle: <strong class="font-bold">{{ $tipos_arco }}</strong></h3>
          <h3 class="text-sm font-light">Material de fabricación de las bridas: <strong class="font-bold">{{ $material_bridas }}</strong></h3>
          <h3 class="text-sm font-light">Tipo de brida: <strong class="font-bold">{{ $tipo_brida }}</strong></h3>
          <h3 class="text-sm font-light">
            Presión Máxima de diseño, Vacío máximo de diseño y rango de movimientos acorde a Normativa seleccionada: 
            <strong class="font-bold">{{ $normativas_brida }}</strong>
          </h3>
        </section>
      
        <div class="imagen-container flex flex-col items-center justify-center space-y-4 md:h-[50vh]">
          <img src="{{ asset($imagen_2d) }}" 
               alt="Imagen 2D" 
               class="w-[230px] h-[250px] transition-transform duration-300 hover:scale-110" />
          <img src="{{ asset($imagen_diagrama) }}" 
               alt="Imagen diagrama" 
               class="cuatro-diagrama w-[600px] h-[90px]" />
        </div>
      </section>
      
      <!-- Campos ocultos para temperatura (asumiendo que ya existen en el formulario principal) -->
      <input type="hidden" name="rango_temperatura" id="rango_temperatura" value="">
      <input type="hidden" name="rango_temperatura2" id="rango_temperatura2" value="">
      
      <!-- Elementos donde se mostrará la info de temperatura (asumiendo que tienes estos elementos en la vista) -->
      <p id="temperatura-info" class="text-sm mt-2"></p>
      <p id="temperatura-info2" class="text-sm mt-2"></p>
      
      <!-- Campos ocultos para temperatura (asumiendo que ya existen en el formulario principal) -->
      <input type="hidden" name="rango_temperatura" id="rango_temperatura" value="">
      <input type="hidden" name="rango_temperatura2" id="rango_temperatura2" value="">
      
      <!-- Elementos donde se mostrará la info de temperatura (asumiendo que tienes estos elementos en la vista) -->
      <p id="temperatura-info" class="text-sm mt-2"></p>
      <p id="temperatura-info2" class="text-sm mt-2"></p>
      
      <div class="seccion2_pagina4 mt-8 font-roboto"> 
        <div class="tabla-container text-sm">
            <h2 class="text-primaryBlue font-bold text-lg md:text-xl mb-4 text-center">Dimensiones Seleccionadas:</h2>
            <div id="tabla-seleccion" class="overflow-x-auto max-w-full">
                <table class="border border-gray-300 w-full">
                    <thead class="bg-gray-100">
                        <tr>
                            @foreach($encabezados_tabla as $encabezado) <!-- Mostrar desde posición 1 -->
                                <th class="border border-gray-300 px-2 py-1 font-bold text-sm">{{ $encabezado }}</th>
                            @endforeach
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach(array_slice($resultado, 1) as $valor) <!-- Mostrar desde posición 1 -->
                                <td class="border border-gray-300 px-2 py-1 text-center text-sm">{{ $valor }}</td>
                            @endforeach
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
      
      <div class="generar-pdf mt-8 flex justify-end">
        <form method="post" action="{{ route('cotizacion.generada') }}">
          @csrf
          <input type="hidden" name="modelo" value="{{ $modelo }}">
          <input type="hidden" name="descripcion" value="{{ $descripcion }}">
          <input type="hidden" name="materiales" value="{{ $materiales }}">
          <input type="hidden" name="materiales2" value="{{ $materiales2 }}">
          <input type="hidden" name="refuerzo" value="{{ $refuerzo }}">
          <input type="hidden" name="tipos_arco" value="{{ $tipos_arco }}">
          <input type="hidden" name="normativas_brida" value="{{ $normativas_brida }}">
          <input type="hidden" name="material_bridas" value="{{ $material_bridas }}">
          <input type="hidden" name="tipo_brida" value="{{ $tipo_brida }}">
          <input type="hidden" name="temperatura_info" value="{{ $temperatura_info }}">
          <input type="hidden" name="temperatura_info2" value="{{ $temperatura_info2 }}">
          <input type="hidden" name="imagen_2d" value="{{ $imagen_2d }}">
          <input type="hidden" name="imagen_diagrama" value="{{ $imagen_diagrama }}">
          <input type="hidden" name="imagen_destacada" value="{{ $imagen_destacada }}">
          <input type="hidden" name="productos_seleccionados" value="{{ implode(',', array_slice($resultado, 1)) }}">
          <input type="hidden" name="encabezados_tabla" value="{{ implode(',', $encabezados_tabla) }}">
      
          @foreach($imagenes as $imagen)
          <input type="hidden" name="imagenes[]" value="{{ $imagen }}">
      @endforeach

          <input class="bg-[#5a0f0d] text-white rounded-full py-4 px-12 hover:bg-red-800 transition-colors cursor-pointer text-base" type="submit" value="Generar PDF">
      </form>
      
      </div>
    </div>
  </div>
  






<!--segunda fila-->
<section class="w-full flex bg-cover bg-center bg-no-repeat items-center justify-center text-white font-roboto mt-5"
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


  



<!-- Script adaptado del original -->
<script>
    function mostrarRangoTemperatura() {
        var materialExterior = document.getElementById("materiales2");
        var temperaturaInfo = document.getElementById("temperatura-info");
        var rangoTemperaturaInput = document.getElementById("rango_temperatura");
    
        var rangoTemperatura = "";
    
        switch (materialExterior.value) {
            case "Nitrilo NBR":
                rangoTemperatura = "-30ºC a 100ºC";
                break;
            case "Viton FKM":
                rangoTemperatura = "-10ºC a 200ºC";
                break;
            case "Neopreno EPDM":
                rangoTemperatura = "-50ºC a 150ºC";
                break;
            case "Teflon PTFE":
                rangoTemperatura = "-70ºC a 260ºC";
                break;
            case "Caucho natural WR":
                rangoTemperatura = "-10ºC a 80ºC";
                break;
            case "NBR Sanitario":
                rangoTemperatura = "-30ºC a 100ºC";
                break;
            case "FKM Sanitario":
                rangoTemperatura = "-10ºC a 200ºC";
                break;
            case "EPDM Sanitario":
                rangoTemperatura = "-50ºC a 150ºC";
                break;
            case "PTFE FDA":
                rangoTemperatura = "-70ºC a 260ºC";
                break;
            default:
                rangoTemperatura = "Seleccionar una opción";
                break;
        }
    
        // Asignar el valor al campo oculto
        rangoTemperaturaInput.value = rangoTemperatura;
        temperaturaInfo.textContent = "Rango de temperatura: " + rangoTemperatura;
    }
    
    // Llamar a la función cuando se cambia la selección
    document.getElementById("materiales2").addEventListener("change", mostrarRangoTemperatura);
    
    
    function mostrarRangoTemperatura2() {
        var materialExterior2 = document.getElementById("materiales");
        var temperaturaInfo2 = document.getElementById("temperatura-info2");
        var rangoTemperaturaInput2 = document.getElementById("rango_temperatura2");
    
        var rangoTemperatura2 = "";
    
        switch (materialExterior2.value) {
            case "Nitrilo NBR":
                rangoTemperatura2 = "-30ºC a 100ºC";
                break;
            case "Viton FKM":
                rangoTemperatura2 = "-10ºC a 200ºC";
                break;
            case "Neopreno EPDM":
                rangoTemperatura2 = "-50ºC a 150ºC";
                break;
            case "Teflon PTFE":
                rangoTemperatura2 = "-70ºC a 260ºC";
                break;
            case "Caucho natural WR":
                rangoTemperatura2 = "-10ºC a 80ºC";
                break;
            case "NBR Sanitario":
                rangoTemperatura2 = "-30ºC a 100ºC";
                break;
            case "FKM Sanitario":
                rangoTemperatura2 = "-10ºC a 200ºC";
                break;
            case "EPDM Sanitario":
                rangoTemperatura2 = "-50ºC a 150ºC";
                break;
            case "PTFE FDA":
                rangoTemperatura2 = "-70ºC a 260ºC";
                break;
            default:
                rangoTemperatura2 = "Seleccionar una opción";
                break;
        }
    
        // Asignar el valor al campo oculto
        rangoTemperaturaInput2.value = rangoTemperatura2;
        temperaturaInfo2.textContent = "Rango de temperatura: " + rangoTemperatura2;
    }
    
    // Llamar a la función cuando se cambia la selección
    document.getElementById("materiales").addEventListener("change", mostrarRangoTemperatura2);
    </script>


  
  
  @endsection