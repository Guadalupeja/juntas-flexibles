@extends('layouts.app')

@section('title', '¿Cómo seleccionar una junta de expansión? Guía completa y cotización en línea ' . date('Y'))
@section('description', 'Aprende a seleccionar la junta de expansión ideal para tu industria. Te explicamos los factores clave, materiales y normas. Cotiza en línea juntas de alta calidad en ' . date('Y') . '.')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Juntas de Expansión Industriales BSH",
  "description": "Fabricamos juntas de expansión personalizadas en hules convencionales y especiales. Ideales para uso industrial. Cotiza sin compromiso con los expertos de BSH.",
  "image": "https://juntasflexibles.com/img/procesadas/Junta-de-expansion-bsh-mexico-large.jpg",
  "brand": {
    "@type": "Brand",
    "name": "BSH"
  },
  "sku": "JUNTA-EXPANSION-INDUSTRIAL",
  "url": "https://juntasflexibles.com/selecciona-juntas-de-expansion/",
  "offers": {
    "@type": "Offer",
    "priceCurrency": "MXN",
    "price": "0",
    "priceValidUntil": "9999-12-31",
    "availability": "https://schema.org/InStock",
    "url": "https://juntasflexibles.com/contacto/"
  }
}
</script>
@endsection


@section('contenido')
<div class="bg-white w-full py-10 px-4 md:px-10 max-w-[1240px] mx-auto">
  <div class="flex flex-col md:flex-row items-center gap-10">
    <!-- Imagen -->
    <div class="w-[100%]">
      <div class="w-[100%]">
        <picture>
          <!-- WebP -->
          <source 
            type="image/webp" 
            srcset="
              {{ asset('/img/procesadas/1955065473_industrial-expansion-joints-_xl-beta-v2-2-2-small.webp') }} 480w,
              {{ asset('/img/procesadas/1955065473_industrial-expansion-joints-_xl-beta-v2-2-2-medium.webp') }} 800w,
              {{ asset('/img/procesadas/1955065473_industrial-expansion-joints-_xl-beta-v2-2-2-large.webp') }} 1200w"
            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
      
          <!-- JPG -->
          <source 
            type="image/jpeg" 
            srcset="
              {{ asset('/img/procesadas/1955065473_industrial-expansion-joints-_xl-beta-v2-2-2-small.jpg') }} 480w,
              {{ asset('/img/procesadas/1955065473_industrial-expansion-joints-_xl-beta-v2-2-2-medium.jpg') }} 800w,
              {{ asset('/img/procesadas/1955065473_industrial-expansion-joints-_xl-beta-v2-2-2-large.jpg') }} 1200w"
            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
      
          <!-- Fallback -->
          <img 
            src="{{ asset('/img/procesadas/1955065473_industrial-expansion-joints-_xl-beta-v2-2-2-large.jpg') }}" 
            alt="Imagen seleccion adecuada de juntas flexibles"
            class="w-full h-auto rounded-xl shadow-md"
            loading="lazy"
          />
        </picture>
      </div>
      
    </div>

    <!-- Texto -->
    <div class="w-full md:w-1/2">
      <h1 class="text-[2rem] font-roboto font-semibold text-[#164ec9] mb-4">
        ¿Cómo seleccionar adecuadamente una junta de expansión?
      </h1>

      <h2 class="text-xl font-bold text-[#164ec9] mb-4">
        Seleccionar adecuadamente tus juntas de expansión
      </h2>

      <p class="mb-4">Requieres considerar varios factores clave. A continuación, te presento algunos pasos para ayudarte en este proceso:</p>

      <ul class="list-disc list-inside space-y-3 text-base leading-relaxed">
        <li>
          <strong>Identifica el tipo de aplicación:</strong> Evalúa el entorno de uso: temperatura, presión, corrosión, etc.
        </li>
        <li>
          <strong>Estudia los materiales:</strong> Compatibilidad con fluidos, resistencia a la corrosión y temperaturas extremas.
        </li>
        <li>
          <strong>Evalúa tamaño y capacidad de movimiento:</strong> Asegura que la junta se adapta a los movimientos térmicos o vibraciones.
        </li>
        <li>
          <strong>Normas y estándares:</strong> Asegura el cumplimiento con regulaciones específicas de tu industria.
        </li>
        <li>
          <strong>Consulta a expertos:</strong> Nosotros te asesoramos sin costo. 
        </li>
      </ul>

      <p class="mt-6">
        Visita nuestro <a href="https://juntasflexibles.com/" class="underline text-[#164ec9] hover:text-[#0e358a] transition">sitio web</a> o utiliza nuestra 
        <a href="https://juntasflexibles.com/selecciona-juntas-de-expansion/" class="underline text-[#164ec9] hover:text-[#0e358a] transition">herramienta de selección</a>.
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
