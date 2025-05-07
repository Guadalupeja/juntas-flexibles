@extends('layouts.app')

@section('title', 'Juntas de expansión mejor calidad amplia gama ' . date('Y') . ' cotiza')
@section('description', 'Juntas de expansión de hules convencionales y especiales para cualquier industria ' . date('Y') . ' Cotiza aquí Fabricamos sobre especificación o diseño con la mejor calidad')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Juntas de Expansión para Conexión de Tubería",
  "description": "Juntas de expansión de hules convencionales y especiales para cualquier industria. Cotiza aquí. Fabricamos sobre especificación o diseño con la mejor calidad.",
  "image": "https://juntasflexibles.com/img/procesadas/Junta-de-expansion-bsh-mexico-large.jpg",
  "brand": {
    "@type": "Brand",
    "name": "BSH"
  },
  "offers": {
    "@type": "Offer",
    "url": "https://juntasflexibles.com/",
    "priceCurrency": "MXN",
    "price": "0",
    "priceValidUntil": "9999-12-31",
    "availability": "https://schema.org/InStock"
  }
}
</script>
@endsection

@section('contenido')
{{-- =========================================
     HERO SECTION
========================================= --}}
<section
  class="relative flex items-center justify-center min-h-[251px] bg-cover bg-center"
  style="
    background-image: url('img/procesadas/Junta-de-expansion-bsh-mexico-large.jpg');
    background-image: -webkit-image-set(
      url('img/procesadas/Junta-de-expansion-bsh-mexico-large.webp') type('image/webp'),
      url('img/Junta-de-expansion-bsh-mexico-large.jpg') type('image/jpeg')
    );
    background-image: image-set(
      url('img/procesadas/Junta-de-expansion-bsh-mexico-large.webp') type('image/webp'),
      url('img/Junta-de-expansion-bsh-mexico-large.jpg') type('image/jpeg')
    );
  "
>
  <!-- Oscurecer un poco el fondo -->
  <div class="absolute inset-0 bg-black opacity-30"></div>

  <div class="container mx-auto relative z-10">
    <h1 class="text-white text-center text-3xl md:text-[52px] font-bold leading-[1.2]">
      Juntas de Expansión para conexión de tubería
    </h1>
  </div>
</section>

{{-- =========================================
     PRIMERA SECCIÓN
========================================= --}}
<section class="bg-gray-100 flex justify-center font-roboto">
  <section class="w-[1140px] flex flex-col md:flex-row">
    <!-- Texto principal -->
    <section class="w-full md:w-1/2 justify-center p-5">
      <h2 id="section1" class="encabezado mt-10 text-primaryBlue">¿Qué es una junta de expansión, para qué sirve?</h2>
      <p class="text-[16px] text-primaryGray text-justify leading-[27px] lg:mt-5">
        Las juntas flexibles o juntas de expansión son dispositivos de ingeniería diseñados para facilitar 
        la conexión entre dos componentes o estructuras, permitiendo el movimiento relativo y 
        la adaptación a cambios de posición, ángulo o vibraciones. <br><br>

        A diferencia de las juntas convencionales, las juntas flexibles no solo brindan una conexión
        mecánica sólida, sino que también se caracterizan por su capacidad para absorber y 
        redistribuir las fuerzas y tensiones que actúan sobre ellas. <br><br>

        Las juntas de expansión son un componente esencial de la instalación hidráulica de cualquier industria.
      </p>

      <h2 id="section2" class="encabezado mt-10 text-primaryBlue">
        El acoplamiento de la junta de expansión permite a las tuberías:
      </h2>
      <ul class="list-disc list-inside space-y-2 text-[16px] text-primaryGray text-justify leading-[27px] lg:mt-5">
        <li>Absorber vibraciones, oscilaciones y cargas residuales ocasionadas por los equipos conectados o en la periferia.</li>
        <li>Compensar desalineación y movimientos entre tuberías.</li>
        <li>Reducir el ruido en la instalación.</li>
        <li>Facilitar operaciones de montaje-desmontaje de tubería y equipos.</li>
        <li>Evitar daños en el sistema por descompensaciones térmicas, cambios en la presión o golpes de ariete.</li>
        <li>Disminuir el desgaste de la tubería.</li>
      </ul>
      <p class="text-[16px] text-primaryGray text-justify leading-[27px] lg:mt-5 font-bold">
        BSH dispone del rango más amplio de configuraciones, modelos y materiales, para cualquier tipo de aplicación.
      </p>
    </section>

    <!-- Tabla de Contenido y llamada a la acción -->
    <section class="w-full md:w-1/2">
      <div class="container mx-auto px-8 py-8">
        <h2 class="text-3xl font-bold mb-6 text-primaryBlue border-b-2 border-[#610001] pb-2 mt-10">
          Tabla de Contenido
        </h2>
        <ul class="space-y-4">
          <li class="flex items-center">
            <div class="w-3 h-3 bg-[#610001] rounded-full mr-3"></div>
            <a href="#section1" class="text-gray-800 hover:text-[#164ec9]">
              ¿Qué es una junta de expansión, para qué sirve?
            </a>
          </li>
          <li class="flex items-center">
            <div class="w-3 h-3 bg-[#610001] rounded-full mr-3"></div>
            <a href="#section2" class="text-gray-800 hover:text-[#164ec9]">
              El acoplamiento de la junta de expansión permite a las tuberías:
            </a>
          </li>
          <li class="flex items-center">
            <div class="w-3 h-3 bg-[#610001] rounded-full mr-3"></div>
            <a href="#section3" class="text-gray-800 hover:text-[#164ec9]">
              ¿Cómo seleccionar adecuadamente una junta de expansión?
            </a>
          </li>
          <li class="flex items-center">
            <div class="w-3 h-3 bg-[#610001] rounded-full mr-3"></div>
            <a href="#section4" class="text-gray-800 hover:text-[#164ec9]">
              Para la correcta selección de la junta flexible bridada será necesario conocer:
            </a>
          </li>
          <li class="flex items-center">
            <div class="w-3 h-3 bg-[#610001] rounded-full mr-3"></div>
            <a href="#section5" class="text-gray-800 hover:text-[#164ec9]">
              ¿De qué materiales están hechas las juntas de expansión flexibles?
            </a>
          </li>
          <li class="flex items-center">
            <div class="w-3 h-3 bg-[#610001] rounded-full mr-3"></div>
            <a href="#section6" class="text-gray-800 hover:text-[#164ec9]">
              ¿Qué estilos tienen las juntas de expansión BSH?
            </a>
          </li>
        </ul>
      </div>

      <div class="text-right">
        <div class="m-[30px] p-[30px]">
          <picture>
            <!-- Versión WebP -->
            <source
              type="image/webp"
              srcset="
                /img/procesadas/junta-expansion-tipo-carrete-1-2-e1667339672895-278x300-small.webp 150w,
                /img/procesadas/junta-expansion-tipo-carrete-1-2-e1667339672895-278x300-medium.webp 278w,
                /img/procesadas/junta-expansion-tipo-carrete-1-2-e1667339672895-278x300-large.webp 556w
              "
              sizes="(max-width: 600px) 150px, (max-width: 900px) 278px, 556px"
            >
            <!-- Versión JPG como fallback -->
            <source
              type="image/jpg"
              srcset="
                /img/procesadas/junta-expansion-tipo-carrete-1-2-e1667339672895-278x300-small.jpg 150w,
                /img/procesadas/junta-expansion-tipo-carrete-1-2-e1667339672895-278x300-medium.jpg 278w,
                /img/procesadas/junta-expansion-tipo-carrete-1-2-e1667339672895-278x300-large.jpg 556w
              "
              sizes="(max-width: 600px) 150px, (max-width: 900px) 278px, 556px"
            >
            <img
              src="/img/procesadas/junta-expansion-tipo-carrete-1-2-e1667339672895-278x300-medium.jpg"
              alt="Juntas de expansión tipo carrete"
              width="278"
              height="300"
              class="max-w-full h-auto inline-block align-middle"
              loading="lazy"
            >
          </picture>
        </div>
      </div>

      <div class="flex justify-center">
        <a href="#contacto" class="inline-block text-center text-white bg-primaryRed rounded-full px-8 py-3 font-roboto font-medium transition duration-300 ease-in-out hover:bg-red-700">
          Cotiza ahora mismo
        </a>
      </div>
    </section>
  </section>
</section>

{{-- =========================================
     SEGUNDA SECCIÓN
========================================= --}}
<section
  class="bg-cover bg-center bg-no-repeat flex items-center justify-center text-white font-roboto"
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
  <div class="w-[1140px] flex flex-col md:flex-row">
    <div id="section3" class="w-full md:w-1/2 justify-center p-5">
      <h2 id="section4" class="encabezado text-white mt-10">
        ¿Cómo seleccionar adecuadamente una junta de expansión?
      </h2>
      <p class="text-[16px] text-white text-justify leading-[27px] lg:mt-5 font-bold">
        Para la correcta selección de la junta flexible bridada será necesario conocer:
      </p>
      <ul class="list-disc list-inside space-y-2 text-[16px] text-white text-justify leading-[27px] lg:mt-5">
        <li>El fluido a manejar.</li>
        <li>El rango de presión y temperatura del fluido.</li>
        <li>Los diámetros de la tubería.</li>
        <li>El patrón (normativa) de las Bridas.</li>
        <li>Distancias y movimientos (desalineaciones) a compensar.</li>
        <li>Equipos conectados a la instalación hidráulica.</li>
        <li>Medio exterior; exposición al sol, salinidad, calor, etc.</li>
      </ul>
      <p class="text-[16px] text-white text-justify leading-[27px] lg:mt-5 font-bold pb-5">
        Con esta información será posible determinar por nuestros ingenieros de aplicación la 
        mejor junta y materiales que garanticen el correcto funcionamiento.
      </p>
    </div>

    <div class="w-full md:w-1/2 justify-center p-5">
      <h2 id="section5" class="encabezado text-white mt-10">
        ¿De qué materiales están hechas las juntas de expansión flexibles?
      </h2>
      <p class="text-[16px] text-white text-justify leading-[27px] lg:mt-5">
        Para las juntas de expansión hemos considerado incluso las condiciones más demandantes, con fluidos peligrosos, 
        como las que se pueden dar en la industria química o la generación nuclear para ofrecer el abanico más amplio 
        de materiales; recubrimientos y reforzamientos.<br><br>

        El fuelle o tubo de las Juntas BSH se fabrica en caucho natural con o sin reforzamientos de fibras de Nylon, 
        Kevlar o Polyester. <br><br>
        El caucho natural, además de ser un excelente aislante térmico y sonoro, brinda las mejores 
        propiedades mecánicas: resiliencia, amortiguamiento y resistencia.<br><br>
        
        La compatibilidad química con el fluido y el sellado, por otra parte, se garantiza 
        con el abanico de revestimientos internos al fuelle.
      </p>
    </div>
  </div>
</section>

{{-- =========================================
     SECCIÓN TABS: MATERIALES
========================================= --}}
<section id="materiales"
  class="relative bg-cover bg-center bg-no-repeat font-roboto"
  style="background-image: url('img/Junta-de-expansion-bsh-mexico.jpg');"
>
  <!-- Filtro blanco semitransparente -->
  <div class="absolute inset-0 bg-white bg-opacity-80"></div>

  <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
    <div class="flex flex-col md:flex-row">
      <!-- Pestañas (navegación) -->
      <div class="w-full md:w-1/3 mb-6 md:mb-0">
        <ul class="space-y-2">
          <li>
            <button class="w-full text-left py-2 px-4 bg-gray-200 hover:bg-gray-300 font-semibold text-primaryBlue focus:outline-none" data-tab="1">
              <h2>Juntas Flexibles Revestimiento de Nitrilo NBR</h2>
            </button>
          </li>
          <li>
            <button class="w-full text-left py-2 px-4 hover:bg-gray-300 font-semibold text-primaryBlue focus:outline-none" data-tab="2">
              <h2>Juntas de Expansión Revestimiento de Vitón FKM</h2>
            </button>
          </li>
          <li>
            <button class="w-full text-left py-2 px-4 hover:bg-gray-300 font-semibold text-primaryBlue focus:outline-none" data-tab="3">
              <h2>Juntas Flexibles Revestimiento de EPDM</h2>
            </button>
          </li>
          <li>
            <button class="w-full text-left py-2 px-4 hover:bg-gray-300 font-semibold text-primaryBlue focus:outline-none" data-tab="4">
              <h2>Juntas de Expansión Revestimiento de Teflón PTFE</h2>
            </button>
          </li>
          <li>
            <button class="w-full text-left py-2 px-4 hover:bg-gray-300 font-semibold text-primaryBlue focus:outline-none" data-tab="5">
              <h2>Juntas Flexibles Revestimiento de Neopreno</h2>
            </button>
          </li>
          <li>
            <button class="w-full text-left py-2 px-4 hover:bg-gray-300 font-semibold text-primaryBlue focus:outline-none" data-tab="6">
              <h2>Juntas de Expansión Materiales Blancos Grado Alimenticio y Farmacia</h2>
            </button>
          </li>
        </ul>
      </div>

      <!-- Contenido de las pestañas -->
      <div class="w-full md:w-2/3 md:pl-8">
        <!-- Tab 1 -->
        <div class="tab-content" data-content="1">
          <h3 class="text-2xl font-bold text-primaryBlue mb-4">Juntas Flexibles Revestimiento de Nitrilo NBR</h3>
          <p class="text-primaryGray">
            Cubre un rango muy amplio de aplicaciones, sobre todo aceites y derivados de petróleo.
          </p>
          <p class="text-primaryGray">
            Excelente costo/beneficio. Soporta temperaturas de -34 °C a 120 °C.
          </p>
        </div>
        <!-- Tab 2 -->
        <div class="tab-content hidden" data-content="2">
          <h3 class="text-2xl font-bold text-primaryBlue mb-4">
            Juntas de Expansión Revestimiento de Vitón FKM
          </h3>
          <p class="text-primaryGray">
            Alta compatibilidad química y soporta temperaturas de hasta 230 °C.
            Buena resistencia al envejecimiento (uso a la intemperie).
          </p>
        </div>
        <!-- Tab 3 -->
        <div class="tab-content hidden" data-content="3">
          <h3 class="text-2xl font-bold text-primaryBlue mb-4">Juntas Flexibles Revestimiento de EPDM</h3>
          <p class="text-primaryGray">
            Ideal para agua y exteriores. Buen comportamiento con ácidos y bajo costo.
          </p>
          <p class="text-primaryGray">
            Rango de Temperatura: -55 °C a 150 °C.
          </p>
        </div>
        <!-- Tab 4 -->
        <div class="tab-content hidden" data-content="4">
          <h3 class="text-2xl font-bold text-primaryBlue mb-4">
            Juntas de Expansión Revestimiento de Teflón PTFE
          </h3>
          <p class="text-primaryGray">
            Compatibilidad universal y el rango más amplio de temperatura.
          </p>
          <p class="text-primaryGray">
            Justifica su costo en químicos peligrosos, solventes, ácidos o sector farmacéutico.
          </p>
        </div>
        <!-- Tab 5 -->
        <div class="tab-content hidden" data-content="5">
          <h3 class="text-2xl font-bold text-primaryBlue mb-4">
            Juntas Flexibles Revestimiento de Neopreno
          </h3>
          <p class="text-primaryGray">
            Usado para aceites, grasas y combustible. Normativa ASTM F1123 (propiedades ignífugas).
          </p>
          <p class="text-primaryGray">
            Rango de Temperatura: -32 °C a 120 °C.
          </p>
        </div>
        <!-- Tab 6 -->
        <div class="tab-content hidden" data-content="6">
          <h3 class="text-2xl font-bold text-primaryBlue mb-4">
            Juntas de Expansión Materiales Blancos Grado Alimenticio y Farmacia
          </h3>
          <p class="text-primaryGray">
            Elastómeros en observancia de FDA y USDA, seguros para industria alimentaria y farmacéutica.
          </p>
          <ul class="list-disc list-inside space-y-2 text-primaryGray">
            <li>Viton (FKM) Blanco</li>
            <li>Nitrilo (NBR) Blanco</li>
            <li>Teflón® PTFE grado alimenticio</li>
            <li>Neopreno FDA Blanco</li>
          </ul>
          <p class="text-primaryGray">
            Para grasas, aceites comestibles, saborizantes, bebidas, pastas, pulpas y cosméticos.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

{{-- =========================================
     SECCIÓN MOVIMIENTOS
========================================= --}}
<section id="movimientos" class="bg-gray-100 flex justify-center font-roboto text-primaryGray text-justify">
  <div class="w-[1140px] flex flex-col items-start">
    <h2 class="encabezado mt-10 text-primaryBlue">
      ¿Qué movimientos soportan las Juntas de Expansión BSH?
    </h2>
    <p class="text-base font-normal leading-relaxed text-custom-gray mt-5">
      El producto puede compensar los siguientes tipos de movimientos (desalineamientos) según el modelo seleccionado:
    </p>
    <ul class="list-disc list-inside mt-4 space-y-2 ml-4">
      <li>Compresión o elongación axial.</li>
      <li>Movimientos laterales (carga transversal).</li>
      <li>Movimientos angulares.</li>
      <li>Vibraciones/cargas oscilantes.</li>
      <li>Movimientos torsionales.</li>
    </ul>
  </div>
</section>

{{-- =========================================
     EJEMPLOS DE MOVIMIENTOS (IMÁGENES)
========================================= --}}
<section class="flex justify-center font-roboto text-primaryGray text-justify">
  <div class="w-[1140px] md:flex justify-center">
    {{-- FJ1 --}}
    <section class="p-1 text-primaryGray mx-3">
      <div class="flex flex-col md:flex-row items-center">
        <div class="max-w-[212.97px] flex-shrink-0">
          <picture>
            <source
              type="image/webp"
              srcset="
                {{ asset('img/procesadas/FJ1-Comprension-Axial-small.webp') }} 213w,
                {{ asset('img/procesadas/FJ1-Comprension-Axial-medium.webp') }} 426w,
                {{ asset('img/procesadas/FJ1-Comprension-Axial-large.webp') }} 640w
              "
              sizes="(max-width: 600px) 213px, (max-width: 900px) 426px, 640px"
            >
            <source
              type="image/jpeg"
              srcset="
                {{ asset('img/procesadas/FJ1-Comprension-Axial-small.jpg') }} 213w,
                {{ asset('img/procesadas/FJ1-Comprension-Axial-medium.jpg') }} 426w,
                {{ asset('img/procesadas/FJ1-Comprension-Axial-large.jpg') }} 640w
              "
              sizes="(max-width: 600px) 213px, (max-width: 900px) 426px, 640px"
            >
            <img
              src="{{ asset('img/procesadas/FJ1-Comprension-Axial-large.jpg') }}"
              alt="FJ1 Movimiento de instalación de Juntas de Expansión_Comprensión Axial"
              title="FJ1 Movimiento de instalación_Comprensión Axial"
              class="w-full mx-2"
              decoding="async"
              loading="lazy"
            />
          </picture>
        </div>
        <div class="max-w-[316.02px] md:flex-grow text-base leading-relaxed mt-4 md:mt-0 md:ml-4 p-2.5">
          <h3 class="text-xl font-bold text-primaryBlue">
            FJ1.- ¿Qué es el movimiento de compresión axial en una junta de expansión?
          </h3>
          <p class="mt-2 p-3 border border-gray-300 rounded bg-gray-100">
            La reducción dimensional o acortamiento en la longitud paralela (cara a cara) de la articulación, 
            a lo largo del eje longitudinal. Ver la Figura <b>FJ1</b>.
          </p>
        </div>
      </div>
    </section>
    
    {{-- FJ2 --}}
    <section class="p-1 text-primaryGray mx-3">
      <div class="flex flex-col md:flex-row items-center">
        <div class="max-w-[212.97px] flex-shrink-0">
          <picture>
            <source
              type="image/webp"
              srcset="
                {{ asset('img/procesadas/FJ2-Elongacion-Axial-small.webp') }} 480w,
                {{ asset('img/procesadas/FJ2-Elongacion-Axial-medium.webp') }} 800w,
                {{ asset('img/procesadas/FJ2-Elongacion-Axial-large.webp') }} 1200w
              "
              sizes="(max-width: 600px) 100vw, 212.97px"
            >
            <source
              type="image/jpeg"
              srcset="
                {{ asset('img/procesadas/FJ2-Elongacion-Axial-small.jpg') }} 480w,
                {{ asset('img/procesadas/FJ2-Elongacion-Axial-medium.jpg') }} 800w,
                {{ asset('img/procesadas/FJ2-Elongacion-Axial-large.jpg') }} 1200w
              "
              sizes="(max-width: 600px) 100vw, 212.97px"
            >
            <img
              src="{{ asset('img/procesadas/FJ2-Elongacion-Axial-large.jpg') }}"
              alt="FJ2 Movimiento de instalación de Juntas de Expansión_Elongación Axial"
              title="FJ2 Movimiento de instalación_Elongación Axial"
              class="w-full mx-2"
              decoding="async"
              loading="lazy"
              width="213"
              height="auto"
            />
          </picture>
        </div>
        <div class="max-w-[316.02px] md:flex-grow text-base leading-relaxed mt-4 md:mt-0 md:ml-4 p-2.5">
          <h3 class="text-xl font-bold text-primaryBlue">
            FJ2.- ¿Cómo es el movimiento de elongación axial en una junta flexible?
          </h3>
          <p class="mt-2 p-3 border border-gray-300 rounded bg-gray-100">
            El aumento dimensional (alargamiento) cara a cara en la longitud paralela de la junta,
            medido a lo largo del eje longitudinal. Ver la Figura <b>FJ2</b>.
          </p>
        </div>
      </div>
    </section>
  </div>
</section>

{{-- =========================================
     MOVIMIENTOS 3 Y 4
========================================= --}}
<section class="bg-gray-100 flex justify-center font-roboto text-primaryGray text-justify">
  <div class="w-[1140px] md:flex justify-center">
    {{-- FJ3 --}}
    <section class="p-1 text-primaryGray mx-3">
      <div class="flex flex-col md:flex-row items-center">
        <div class="max-w-[212.97px] flex-shrink-0">
          <picture>
            <source
              type="image/webp"
              srcset="
                /img/procesadas/FJ3-Movimiento-lateral-o-Transversal-small.webp 480w,
                /img/procesadas/FJ3-Movimiento-lateral-o-Transversal-medium.webp 800w,
                /img/procesadas/FJ3-Movimiento-lateral-o-Transversal-large.webp 1200w
              "
              sizes="(max-width: 600px) 100vw, (max-width: 900px) 50vw, 212.97px"
            >
            <source
              type="image/jpeg"
              srcset="
                /img/procesadas/FJ3-Movimiento-lateral-o-Transversal-small.jpg 480w,
                /img/procesadas/FJ3-Movimiento-lateral-o-Transversal-medium.jpg 800w,
                /img/procesadas/FJ3-Movimiento-lateral-o-Transversal-large.jpg 1200w
              "
              sizes="(max-width: 600px) 100vw, (max-width: 900px) 50vw, 212.97px"
            >
            <img
              src="/img/procesadas/FJ3-Movimiento-lateral-o-Transversal-medium.jpg"
              alt="FJ3 Movimiento de instalación de Juntas de Expansión_Movimiento Transversal"
              title="FJ3 Movimiento Transversal"
              class="w-full mx-2"
              width="212.97"
              height="auto"
              decoding="async"
              loading="lazy"
            />
          </picture>
        </div>
        <div class="max-w-[316.02px] md:flex-grow text-base leading-relaxed mt-4 md:mt-0 md:ml-4 p-2.5">
          <h3 class="text-xl font-bold text-primaryBlue">
            FJ3.- ¿Qué es el movimiento lateral o transversal en juntas flexibles?
          </h3>
          <p class="mt-2 p-3 border border-gray-300 rounded bg-gray-100">
            El desplazamiento de los dos extremos en dirección perpendicular a su eje longitudinal.
            Ver Figura <b>FJ3</b>.
          </p>
        </div>
      </div>
    </section>

    {{-- FJ4 --}}
    <section class="p-1 text-primaryGray mx-3">
      <div class="flex flex-col md:flex-row items-center">
        <div class="max-w-[212.97px] flex-shrink-0">
          <picture>
            <source
              type="image/webp"
              srcset="
                {{ asset('img/procesadas/FJ4-Movimiento-Angular-small.webp') }} 480w,
                {{ asset('img/procesadas/FJ4-Movimiento-Angular-medium.webp') }} 800w,
                {{ asset('img/procesadas/FJ4-Movimiento-Angular-large.webp') }} 1200w
              "
              sizes="(max-width: 600px) 480px, (max-width: 900px) 800px, 212.97px"
            >
            <source
              type="image/jpeg"
              srcset="
                {{ asset('img/procesadas/FJ4-Movimiento-Angular-small.jpg') }} 480w,
                {{ asset('img/procesadas/FJ4-Movimiento-Angular-medium.jpg') }} 800w,
                {{ asset('img/procesadas/FJ4-Movimiento-Angular-large.jpg') }} 1200w
              "
              sizes="(max-width: 600px) 480px, (max-width: 900px) 800px, 212.97px"
            >
            <img
              src="{{ asset('img/procesadas/FJ4-Movimiento-Angular-large.jpg') }}"
              alt="FJ4 Movimiento de instalación de Juntas de Expansión_Movimiento Angular"
              title="FJ4 Movimiento Angular"
              class="w-full mx-2"
              decoding="async"
              loading="lazy"
              width="212.97"
              height="auto"
            />
          </picture>
        </div>
        <div class="max-w-[316.02px] md:flex-grow text-base leading-relaxed mt-4 md:mt-0 md:ml-4 p-2.5">
          <h3 class="text-xl font-bold text-primaryBlue">
            FJ4.- ¿En qué consiste el movimiento angular de las juntas de expansión?
          </h3>
          <p class="mt-2 p-3 border border-gray-300 rounded bg-gray-100">
            El desplazamiento angular del eje longitudinal desde su posición original, medido en grados.
            Combina elongación y compresión axial. Ver Figura <b>FJ4</b>.
          </p>
        </div>
      </div>
    </section>
  </div>
</section>

{{-- =========================================
     MOVIMIENTOS 5 Y 6
========================================= --}}
<section class="flex justify-center font-roboto text-primaryGray text-justify">
  <div class="w-[1140px] md:flex justify-center">
    {{-- FJ5 --}}
    <section class="p-1 text-primaryGray mx-3">
      <div class="flex flex-col md:flex-row items-center">
        <div class="max-w-[212.97px] flex-shrink-0">
          <picture>
            <source
              type="image/webp"
              srcset="
                {{ asset('img/procesadas/FJ5-Vibracion-small.webp') }} 212w,
                {{ asset('img/procesadas/FJ5-Vibracion-medium.webp') }} 425w,
                {{ asset('img/procesadas/FJ5-Vibracion-large.webp') }} 640w
              "
              sizes="(max-width: 600px) 212px, (max-width: 900px) 425px, 640px"
            >
            <source
              type="image/jpeg"
              srcset="
                {{ asset('img/procesadas/FJ5-Vibracion-small.jpg') }} 212w,
                {{ asset('img/procesadas/FJ5-Vibracion-medium.jpg') }} 425w,
                {{ asset('img/procesadas/FJ5-Vibracion-large.jpg') }} 640w
              "
              sizes="(max-width: 600px) 212px, (max-width: 900px) 425px, 640px"
            >
            <img
              src="{{ asset('img/procesadas/FJ5-Vibracion-large.jpg') }}"
              alt="FJ5 Movimiento de instalación de Juntas de Expansión_Vibración"
              title="FJ5 Movimiento de instalación_Vibración"
              class="w-full mx-2"
              decoding="async"
              loading="lazy"
              width="640"
              height="auto"
            />
          </picture>
        </div>
        <div class="max-w-[316.02px] md:flex-grow text-base leading-relaxed mt-4 md:mt-0 md:ml-4 p-2.5">
          <h3 class="text-xl font-bold text-primaryBlue">
            FJ5.- ¿En qué consiste el movimiento de vibración de una junta flexible?
          </h3>
          <p class="mt-2 p-3 border border-gray-300 rounded bg-gray-100">
            Capacidad para absorber oscilaciones mecánicas (alta frecuencia) en el sistema.
            Ver Figura <b>FJ5</b>.
          </p>
        </div>
      </div>
    </section>

    {{-- FJ6 --}}
    <section class="p-1 text-primaryGray mx-3">
      <div class="flex flex-col md:flex-row items-center">
        <div class="max-w-[212.97px] flex-shrink-0">
          <picture>
            <source
              type="image/webp"
              srcset="
                {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-small.webp') }} 213w,
                {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-medium.webp') }} 316w,
                {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-large.webp') }} 480w
              "
              sizes="(max-width: 600px) 213px, (max-width: 900px) 316px, 480px"
            >
            <source
              type="image/jpeg"
              srcset="
                {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-small.jpg') }} 213w,
                {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-medium.jpg') }} 316w,
                {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-large.jpg') }} 480w
              "
              sizes="(max-width: 600px) 213px, (max-width: 900px) 316px, 480px"
            >
            <img
              src="{{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-medium.jpg') }}"
              alt="FJ6 Movimiento de instalación de Juntas de Expansión_Movimiento Torsional"
              title="FJ6 Movimiento Torsional"
              class="w-full mx-2"
              decoding="async"
              loading="lazy"
            />
          </picture>
        </div>
        <div class="max-w-[316.02px] md:flex-grow text-base leading-relaxed mt-4 md:mt-0 md:ml-4 p-2.5">
          <h3 class="text-xl font-bold text-primaryBlue">
            FJ6.- ¿Qué es el movimiento torsional en las juntas flexibles?
          </h3>
          <p class="mt-2 p-3 border border-gray-300 rounded bg-gray-100">
            La torsión de un extremo de la junta respecto al otro extremo alrededor de su eje longitudinal.
            Se mide en grados. Ver Figura <b>FJ6</b>.
          </p>
        </div>
      </div>
    </section>
  </div>
</section>

{{-- =========================================
     LLAMADO A VER ESTILOS
========================================= --}}
<section class="flex justify-center items-center min-h-[318px] max-w-[1097px] mx-auto p-6 bg-white shadow-md rounded font-roboto">
  <div id="section6" class="w-full text-center">
    <h2 class="text-2xl font-bold text-primaryBlue leading-7">
      ¿Qué estilos tienen las juntas de expansión BSH?
    </h2>
    <div class="mt-4">
      <p class="text-primaryGray text-base leading-relaxed mb-4">
        Las juntas de expansión cuentan con diseños rigurosamente probados en laboratorio y campo con 25 años de desarrollo.
      </p>
      <p class="text-primaryGray text-base leading-relaxed">
        Excepcional desempeño en condiciones dinámicas, gran resistencia a la presión y ruptura, 
        sin sacrificar flujos adecuados libres de turbulencia.
      </p>
    </div>
    <div class="mt-6">
      <a
        href="https://juntasflexibles.com/estilos-juntas-de-expansion-bsh"
        class="inline-block bg-primaryBlue text-white font-bold py-3 px-6 rounded-full shadow-md hover:bg-primaryRed"
      >
        Ver estilos
      </a>
    </div>
  </div>
</section>

{{-- =========================================
     SECCIÓN CONTACTO
========================================= --}}
<section
  class="w-full flex bg-cover bg-center bg-no-repeat items-center justify-center text-white font-roboto"
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
    <h2 class="encabezado text-white m-5">
      ¿Necesitas más información sobre las juntas de expansión?<br>
      Por favor llena el siguiente formulario y en breve un experto se comunicará contigo:
    </h2>
    <div class="p-5">
      <!-- Carga diferida de HubSpot -->
      <div id="hubspot-form"></div>   {{-- ← el form se inyectará aquí --}}
{{-- HubSpot: carga solo cuando el visitante se acerca al formulario --}}
<link rel="preconnect" href="https://js.hsforms.net">
<link rel="dns-prefetch" href="https://js.hsforms.net">

<script>
  document.addEventListener('DOMContentLoaded', () => {
    const target = document.getElementById('hubspot-form');

    function loadHubSpot() {
      if (window.hsFormLoaded) return;         // evita doble carga
      window.hsFormLoaded = true;

      const s   = document.createElement('script');
      s.src     = 'https://js.hsforms.net/forms/v2.js'; // 30-40 % más ligero que shell.js
      s.async   = true;
      s.onload  = () => {
        if (window.hbspt) {
          hbspt.forms.create({
            region   : 'na1',
            portalId : '7547674',
            formId   : 'e391047b-0ba7-411a-85bc-4c528141e149',
            target   : '#hubspot-form'
          });
        }
      };
      document.body.appendChild(s);
    }

    /* ① Carga cuando la sección CONTACTO entra a viewport (≈ 200 px antes) */
    if ('IntersectionObserver' in window) {
      const io = new IntersectionObserver((entries, observer) => {
        if (entries[0].isIntersecting) {
          loadHubSpot();
          observer.disconnect();
        }
      }, { rootMargin: '0px 0px 200px 0px' });
      io.observe(target);
    } else {
      /* ② Respaldo: si el navegador no soporta IO, espera 5 s tras load */
      window.addEventListener('load', () => setTimeout(loadHubSpot, 5000));
    }
  });
</script>

    </div>
  </div>
</section>

{{-- =========================================
     PUNTUAR PÁGINA
========================================= --}}
<div class="flex flex-col items-center box-border my-8" id="rating-container" data-page-id="{{ $pageId ?? 'N/A' }}">
  <div class="box-border mb-2 text-lg">¡Haz clic para puntuar esta página!</div>
  <div id="star-rating" class="flex">
    @for ($i = 1; $i <= 5; $i++)
      <img
        src="/img/star_2.svg"
        data-rating="{{ $i }}"
        class="star cursor-pointer w-8 h-8"
        alt="Estrella {{ $i }}"
        loading="lazy"
      >
    @endfor
  </div>
  <div class="inline-block align-bottom ml-2 mt-2">
    <span class="text-sm">
      (Votos: <span id="votes-count">0</span> | Promedio: <span id="average-rating">0</span>)
    </span>
  </div>
</div>
@endsection
