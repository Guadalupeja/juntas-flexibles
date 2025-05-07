@extends('layouts.app')

@section('title', 'Guía de Juntas de Expansión: Medidas y su Importancia - ' . date('Y'))
@section('description', 'Las juntas de expansión son componentes esenciales en una 
variedad de aplicaciones industriales y de construcción, medidas comunes e importancia de selección.')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "mainEntityOfPage": "https://juntasflexibles.com/2023/09/08/guia-de-juntas-de-expansion-medidas-comunes-y-su-importancia/",
  "headline": "Guía de Juntas de Expansión: Medidas y su Importancia",
  "description": "Las juntas de expansión permiten que los sistemas de tuberías se adapten a cambios de temperatura, vibraciones y otros factores. Conoce las medidas más comunes y por qué son esenciales para evitar fugas y daños mayores.",
  "image": [
    "https://juntasflexibles.com/wp-content/uploads/2023/09/3211325993_industrial-expansion-joints_xl-beta-v2-2-2.png"
  ],
  "author": {
    "@type": "Person",
    "name": "jun4sflex"
  },
  "publisher": {
    "@type": "Organization",
    "name": "BSH",
    "logo": {
      "@type": "ImageObject",
      "url": "https://juntasflexibles.com/img/logo.png"
    }
  },
  "datePublished": "2023-09-08",
  "dateModified": "2023-09-08"
}
</script>
@endsection


@section('contenido')
<div class="bg-white w-full py-10 px-4 md:px-10 max-w-[1240px] mx-auto">
  <div class="flex flex-col md:flex-row items-center gap-10">
    <!-- Columna Izquierda: Imagen -->
    <div class="w-[80%] sm:w-1/2">
      <picture>
        <!-- Versión WebP -->
        <source 
          type="image/webp" 
          srcset="
            {{ asset('/img/procesadas/3211325993_industrial-expansion-joints_xl-beta-v2-2-2-small.webp') }} 480w,
            {{ asset('/img/procesadas/3211325993_industrial-expansion-joints_xl-beta-v2-2-2-medium.webp') }} 800w,
            {{ asset('/img/procesadas/3211325993_industrial-expansion-joints_xl-beta-v2-2-2-large.webp') }} 1200w"
          sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px"
        >
        <!-- Versión JPEG -->
        <source 
          type="image/jpeg" 
          srcset="
            {{ asset('/img/procesadas/3211325993_industrial-expansion-joints_xl-beta-v2-2-2-small.jpg') }} 480w,
            {{ asset('/img/procesadas/3211325993_industrial-expansion-joints_xl-beta-v2-2-2-medium.jpg') }} 800w,
            {{ asset('/img/procesadas/3211325993_industrial-expansion-joints_xl-beta-v2-2-2-large.jpg') }} 1200w"
          sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px"
        >
        <!-- Fallback -->
        <img 
          src="{{ asset('/img/procesadas/3211325993_industrial-expansion-joints_xl-beta-v2-2-2-large.jpg') }}" 
          alt="Juntas de expansión medidas comunes"
          class="w-full h-auto rounded-xl shadow-md"
          loading="lazy"
        />
      </picture>
    </div>

    <!-- Columna Derecha: Contenido -->
    <div class="w-full md:w-1/2">
      <!-- Título principal -->
      <h1 class="text-[2rem] font-roboto font-semibold text-[#164ec9] mb-4">
        Guía de Juntas de Expansión: Medidas Comunes y su Importancia
      </h1>

      <!-- Introducción -->
      <p class="mb-4 text-[#011627bf]">
        Las juntas de expansión son componentes esenciales en una variedad de aplicaciones industriales y de construcción. Su función principal es permitir que las estructuras, sistemas y tuberías se expandan y contraigan de manera segura debido a los cambios de temperatura, vibraciones u otros factores.
      </p>
      <p class="mb-4 text-[#011627bf]">
        Sin embargo, para que estas juntas cumplan su propósito de manera efectiva, es crucial seleccionar las medidas adecuadas. A continuación, exploramos las medidas más comunes de las juntas de expansión y por qué son tan importantes.
      </p>

      <!-- Subtítulo -->
      <h2 class="text-xl font-bold text-[#164ec9] mb-4">
        Medidas Comunes de Juntas de Expansión
      </h2>
      <ol class="list-decimal list-inside space-y-3 text-base leading-relaxed text-[#011627bf]">
        <li>
          <strong>Diámetro Interior (ID):</strong> El espacio a través del cual fluye el fluido. Asegura un paso sin restricciones y mínima fricción.
        </li>
        <li>
          <strong>Longitud Total (TL):</strong> Distancia entre extremo de entrada y de salida. Imprescindible para que la junta cumpla con el movimiento requerido.
        </li>
        <li>
          <strong>Diámetro Exterior (OD):</strong> El diámetro exterior del cuerpo. Permite verificar el ajuste en la estructura circundante.
        </li>
        <li>
          <strong>Espesor de la Pared (WT):</strong> Grosor del material de la junta. Clave para la resistencia y durabilidad.
        </li>
      </ol>

      <!-- Subtítulo -->
      <h2 class="text-xl font-bold text-[#164ec9] mt-6 mb-4">
        Importancia de Seleccionar las Medidas Correctas
      </h2>
      <p class="mb-4 text-[#011627bf]">
        <strong>Prevención de Fallas:</strong> Si la junta es demasiado pequeña o grande, puede presentar tensiones excesivas y fallar prematuramente, provocando fugas o daños mayores.
      </p>
      <p class="mb-4 text-[#011627bf]">
        <strong>Eficiencia Energética:</strong> Al dimensionarla correctamente, se reduce la fricción y se optimiza el flujo, ahorrando costes en operación.
      </p>
      <p class="mb-4 text-[#011627bf]">
        <strong>Seguridad:</strong> Una junta de expansión mal ajustada puede derivar en fugas de químicos o gases peligrosos.
      </p>
      <p class="mb-4 text-[#011627bf]">
        <strong>Durabilidad:</strong> Con la dimensión precisa, la junta resiste mejor el desgaste, prolongando su vida útil y reduciendo gastos de reemplazo.
      </p>
      <p class="mt-2 text-[#011627bf]">
        Elegir las medidas correctas de las juntas de expansión es esencial para su rendimiento, seguridad y vida útil. Antes de seleccionar una junta, considera las necesidades específicas de tu proyecto o consulta con nuestros expertos. ¡La inversión en la selección adecuada hará la diferencia!
      </p>
    </div>
  </div>
</div>

<!-- Sección con imagen de fondo y formulario (idéntica a las demás páginas) -->
<section class="w-full bg-cover bg-center bg-no-repeat text-white font-roboto py-16 px-4"
  style="
    background-image: url('/img/procesadas/bombas-industriales-large.jpg');
    background-image: -webkit-image-set(
      url('/img/procesadas/bombas-industriales-large.webp') type('image/webp'),
      url('/img/procesadas/bombas-industriales-large.jpg') type('image/jpeg')
    );
    background-image: image-set(
      url('/img/procesadas/bombas-industriales-large.webp') type('image/webp'),
      url('/img/procesadas/bombas-industriales-large.jpg') type('image/jpeg')
    );
  "
>
  <div class="max-w-4xl mx-auto bg-black/60 p-6 rounded-xl">
    <h2 class="text-2xl md:text-3xl font-bold mb-4">
      ¿Necesitas más información sobre las juntas de expansión?
    </h2>
    <p class="mb-6">
      Por favor llena el siguiente formulario y en breve un experto se comunicará contigo:
    </p>

    <!-- Formulario HubSpot -->
    <div>
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

<!-- Sección de calificación / votación -->
<div class="flex flex-col items-center my-10">
  <div class="mb-2 text-lg">¡Haz clic para puntuar esta página!</div>
  <div id="star-rating" class="flex space-x-2">
    @for ($i = 1; $i <= 5; $i++)
      <img src="/img/star_2.svg" data-rating="{{ $i }}" class="star cursor-pointer w-8 h-8" alt="Estrella {{ $i }}">
    @endfor
  </div>
  <div class="mt-2 text-sm">
    (Votos: <span id="votes-count">0</span> Promedio: <span id="average-rating">0</span>)
  </div>
</div>
@endsection
