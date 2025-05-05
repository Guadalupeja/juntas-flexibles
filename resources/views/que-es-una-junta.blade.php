@extends('layouts.app')

@section('title', '¿Qué es una junta de expansión bridada? Características ' . date('Y'))
@section('description', 'Una junta de expansión bridada es un componente utilizado en sistemas de tuberías y conductos para permitir la expansión y contracción térmica de los materiales')
@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Article",
  "headline": "¿Qué es una junta de expansión bridada?",
  "description": "Descubre qué es una junta de expansión bridada, sus características, aplicaciones y beneficios para sistemas de tuberías industriales.",
  "image": "https://juntasflexibles.com/wp-content/uploads/2023/07/junta-flexible-bridada.jpg",
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
  "datePublished": "2023-07-26",
  "mainEntityOfPage": "https://juntasflexibles.com/2023/07/26/que-es-una-junta-de-expansion-bridada/"
}
</script>
@endsection

@section('contenido')
<div class="bg-white w-full py-10 px-4 md:px-10 max-w-[1240px] mx-auto">
  <div class="flex flex-col md:flex-row items-center gap-10">
    <!-- Columna Izquierda: Imagen -->
    <div class="w-[80%] sm:w-1/2">
        <picture>
            <!-- WebP -->
            <source 
              type="image/webp" 
              srcset="
                {{ asset('/img/procesadas/junta-flexible-bridada-small.webp') }} 480w,
                {{ asset('/img/procesadas/junta-flexible-bridada-medium.webp') }} 800w,
                {{ asset('/img/procesadas/junta-flexible-bridada-large.webp') }} 1200w"
              sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
        
            <!-- JPG -->
            <source 
              type="image/jpeg" 
              srcset="
                {{ asset('/img/procesadas/junta-flexible-bridada-small.jpg') }} 480w,
                {{ asset('/img/procesadas/junta-flexible-bridada-medium.jpg') }} 800w,
                {{ asset('/img/procesadas/junta-flexible-bridada-large.jpg') }} 1200w"
              sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
        
            <!-- Fallback -->
            <img 
              src="{{ asset('/img/procesadas/junta-flexible-bridada-large.jpg') }}" 
              alt="Imagen materiales de juntas flexibles"
              class="w-full h-auto rounded-xl shadow-md"
              loading="lazy"
            />
          </picture>
    </div>

    <!-- Columna Derecha: Contenido -->
    <div class="w-full md:w-1/2">
      <h1 class="text-[2rem] font-roboto font-semibold text-[#164ec9] mb-4">
        ¿Qué es una junta de expansión bridada?
      </h1>

      <h2 class="text-xl font-bold text-[#164ec9] mb-4">
        Junta de expansión bridada
      </h2>

      <p class="mb-4 text-[#011627bf]">
        Una <strong>junta de expansión bridada</strong>, también conocida como junta de dilatación bridada, es un componente utilizado en sistemas de tuberías y conductos para permitir la <strong>expansión y contracción térmica</strong> de los materiales, evitando así posibles daños por tensiones mecánicas.
      </p>

      <p class="mb-4 text-[#011627bf]">
        Estas juntas están diseñadas para compensar los cambios dimensionales que pueden ocurrir debido a las fluctuaciones de temperatura en los fluidos que circulan a través de las tuberías.
      </p>

      <h2 class="text-xl font-bold text-[#164ec9] mb-4">
        Características principales
      </h2>

      <ol class="list-decimal list-inside space-y-3 text-base leading-relaxed text-[#011627bf]">
        <li><strong>Bridas:</strong> La junta de expansión bridada tiene bridas en ambos extremos, permitiendo su conexión segura a las tuberías o conductos.</li>
        <li><strong>Flexibilidad:</strong> Está fabricada con materiales flexibles (caucho, tejido sintético o metal corrugado), que absorben los movimientos de expansión y contracción.</li>
        <li><strong>Compensación de movimientos:</strong> A medida que los materiales se calientan o enfrían, pueden expandirse o contraerse. La junta bridada absorbe estos movimientos, evitando tensiones o fracturas.</li>
        <li><strong>Prevención de fugas:</strong> Al absorber movimientos y tensiones, reduce el riesgo de fugas en el sistema de tuberías.</li>
        <li><strong>Reducción de ruido y vibraciones:</strong> También contribuye a disminuir el ruido y vibraciones provocadas por el flujo de fluido.</li>
      </ol>

      <p class="mt-6 text-[#011627bf]">
        Las juntas de expansión bridadas se utilizan en una amplia gama de aplicaciones industriales: HVAC, plantas de energía, petróleo, gas y procesos industriales de transporte de fluidos.
      </p>

      <p class="mt-2 text-[#011627bf]">
        Conoce más en nuestro <a href="https://juntasflexibles.com/" class="underline text-[#164ec9] hover:text-[#0e358a] transition">sitio web</a>. Solicita una asesoría personalizada, ¡visítanos!
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

    <!-- Formulario HubSpot (mismo que en tus otras páginas) -->
    <div>
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
