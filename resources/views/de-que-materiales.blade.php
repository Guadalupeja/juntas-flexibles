@extends('layouts.app')

@section('title', 'Materiales de las juntas de expansión, características ' . date('Y'))
@section('description', 'Descubre los materiales comunes utilizados en la fabricación de juntas de expansión, incluyendo caucho, metal, PTFE y tejidos. Solicita asesoría gratuita para tus aplicaciones industriales.')
@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "¿De qué materiales están hechas las juntas de expansión?",
  "description": "Descubre los materiales comunes utilizados en la fabricación de juntas de expansión, incluyendo caucho, metal, PTFE y tejidos, y sus aplicaciones en la industria.",
  "image": "https://cdn-hedbd.nitrocdn.com/ZwqQtgWTnczxSiNnVDeTIhVIOlYnrWml/assets/images/optimized/rev-e4b0e7e/juntasflexibles.com/wp-content/uploads/2023/06/3630642918_industrial-expansion-joints-_xl-beta-v2-2-2.png",
  "author": {
    "@type": "Person",
    "name": "BSH"
  },
  "publisher": {
    "@type": "Organization",
    "name": "BSH",
    "logo": {
      "@type": "ImageObject",
      "url": "https://juntasflexibles.com/img/logo.png"
    }
  },
  "datePublished": "2023-06-29",
  "mainEntityOfPage": "https://juntasflexibles.com/2023/06/29/de-que-materiales-estan-hechas-las-juntas-de-expansion/"
}
</script>
@endsection

@section('contenido')
<div class="bg-white w-full py-10 px-4 md:px-10 max-w-[1240px] mx-auto">
  <div class="flex flex-col md:flex-row items-center gap-1">
    <!-- Imagen -->
    <div class="w-full md:w-1/2  p-5">
      <div class="w-full">
        <picture>
          <!-- WebP -->
          <source 
            type="image/webp" 
            srcset="
              {{ asset('/img/procesadas/3630642918_industrial-expansion-joints-_xl-beta-v2-2-2-small.webp') }} 480w,
              {{ asset('/img/procesadas/3630642918_industrial-expansion-joints-_xl-beta-v2-2-2-medium.webp') }} 800w,
              {{ asset('/img/procesadas/3630642918_industrial-expansion-joints-_xl-beta-v2-2-2-large.webp') }} 1200w"
            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
      
          <!-- JPG -->
          <source 
            type="image/jpeg" 
            srcset="
              {{ asset('/img/procesadas/3630642918_industrial-expansion-joints-_xl-beta-v2-2-2-small.jpg') }} 480w,
              {{ asset('/img/procesadas/3630642918_industrial-expansion-joints-_xl-beta-v2-2-2-medium.jpg') }} 800w,
              {{ asset('/img/procesadas/3630642918_industrial-expansion-joints-_xl-beta-v2-2-2-large.jpg') }} 1200w"
            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
      
          <!-- Fallback -->
          <img 
            src="{{ asset('/img/procesadas/3630642918_industrial-expansion-joints-_xl-beta-v2-2-2-large.jpg') }}" 
            alt="Imagen materiales de juntas flexibles"
            class="w-full h-auto rounded-xl shadow-md"
            loading="lazy"
          />
        </picture>
      </div>
    </div>

    <!-- Texto -->
    <div class="w-full md:w-1/2">
      <h1 class="text-[2rem] font-roboto font-semibold text-[#164ec9] mb-4">
        ¿De qué materiales están hechas las juntas de expansión?
      </h1>

      <h2 class="text-xl font-bold text-[#164ec9] mb-4">
        Materiales de las juntas de expansión
      </h2>

      <p class="mb-4 text-[#011627bf]">
        Las juntas de expansión están fabricadas con una variedad de materiales, y la elección del material depende de las condiciones de aplicación y los requisitos específicos.
      </p>

      <ol class="list-decimal text-[#011627bf] list-inside space-y-3 text-base leading-relaxed">
        <li>
          <strong>Caucho:</strong> Utilizado en forma de EPDM, neopreno y nitrilo, ofrece flexibilidad, resistencia al envejecimiento y un buen aislamiento.
        </li>
        <li>
          <strong>Metal:</strong> Acero inoxidable, acero al carbono y otros metales se emplean en juntas metálicas, ideales para aplicaciones de alta presión y temperatura.
        </li>
        <li>
          <strong>PTFE (Politetrafluoroetileno):</strong> Destacado por su resistencia a la temperatura, baja fricción y excelente resistencia química.
        </li>
        <li>
          <strong>Tela o tejido:</strong> Combinado con caucho o PTFE, se utiliza en aplicaciones que requieren movilidad y resistencia al calor.
        </li>
      </ol>

      <p class="mt-6 text-[#011627bf]">
        BSH dispone del rango más amplio de configuraciones, modelos y materiales para cualquier tipo de aplicación. Solicita una asesoría gratuita en nuestro <a href="https://juntasflexibles.com/" class="underline text-[#164ec9] hover:text-[#0e358a] transition">sitio web</a> y estaremos encantados de atenderte.
      </p>
    </div>
  </div>
</div>

<!-- Segunda sección con imagen de fondo y formulario -->
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

<!-- Puntuación -->
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
