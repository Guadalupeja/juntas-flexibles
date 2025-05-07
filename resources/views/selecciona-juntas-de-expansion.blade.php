@extends('layouts.app')

@section('title', 'Selecciona aqui juntas de expansión para tubería | BSH')
@section('description', 'Encuentra y cotiza la junta flexible que necesitas. Todo tipo de aplicaciones. 
Somos fabricantes de las mejores juntas de expansión flexibles, gama más amplia')


@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Juntas de Expansión para Conexión de Tubería",
  "description": "Encuentra juntas de expansión flexibles para cualquier industria, fabricadas con materiales de alta calidad según tus especificaciones.",
  "image": "https://juntasflexibles.com/img/procesadas/Junta-de-expansion-bsh-mexico-large.jpg",
  "brand": {
    "@type": "Brand",
    "name": "BSH",
    "logo": "https://juntasflexibles.com/img/procesadas/bsh-logo.jpg"
  },
  "offers": {
    "@type": "Offer",
    "url": "https://juntasflexibles.com/",
    "priceCurrency": "MXN",
    "price": "0", 
    "availability": "https://schema.org/InStock",
    "priceValidUntil": "9999-12-31"
  }
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "Inicio",
      "item": "https://juntasflexibles.com/"
    },
    {
      "@type": "ListItem",
      "position": 2,
      "name": "Juntas de Expansión",
      "item": "https://juntasflexibles.com/juntas-expansion"
    },
    {
      "@type": "ListItem",
      "position": 3,
      "name": "Herramienta de Selección",
      "item": "https://juntasflexibles.com/herramienta-seleccion"
    }
  ]
}
</script>

<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Qué son las juntas de expansión?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Son dispositivos flexibles diseñados para absorber movimientos y vibraciones en sistemas de tuberías."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué ventajas ofrecen las juntas de expansión de BSH?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Ofrecen durabilidad, flexibilidad y adaptabilidad a cualquier aplicación industrial."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo puedo cotizar una junta de expansión?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Llena el formulario en nuestro sitio web y un experto te contactará para ayudarte con tu solicitud."
      }
    }
  ]
}
</script>
@endsection




@section('contenido')

<section class="w-full max-w-[1132px] mx-auto p-5 font-roboto">
    <div class="flex justify-center">
      <h1 class="encabezado text-primaryBlue">Herramienta para la selección de Juntas de Expansión</h1>
    </div>
    <p class="text-primaryGray p-10 text-[18px]">
      Aquí podrás hacer una selección del modelo de junta de expansión, materiales, normativas y diversas configuraciones disponibles para fabricación.
    </p>
    <div class="flex">
        <h2 class="encabezado text-primaryBlue">Selecciona el estilo de la Junta de expansión que requieres:</h2>
      </div>


      <ul class="mt-16 grid gap-8 list-none md:grid-cols-3">
<!-- Tarjeta 1 -->
<li class="relative overflow-hidden group">
  <picture>
      <!-- Versión más pequeña (mobile-first) -->
      <source srcset="img/procesadas/1110-mosaico-ok-small.webp" type="image/webp" media="(max-width: 480px)">
      <source srcset="img/procesadas/1110-mosaico-ok-small.jpg" type="image/jpeg" media="(max-width: 480px)">
      
      <!-- Versión mediana -->
      <source srcset="img/procesadas/1110-mosaico-ok-medium.webp" type="image/webp" media="(max-width: 800px)">
      <source srcset="img/procesadas/1110-mosaico-ok-medium.jpg" type="image/jpeg" media="(max-width: 800px)">
      
      <!-- Versión grande -->
      <source srcset="img/procesadas/1110-mosaico-ok-large.webp" type="image/webp" media="(max-width: 1200px)">
      <source srcset="img/procesadas/1110-mosaico-ok-large.jpg" type="image/jpeg" media="(max-width: 1200px)">
      
      <!-- Fallback: imagen original o mayor tamaño -->
      <img
          src="img/procesadas/1110-mosaico-ok-large.jpg"
          alt="Junta Flexible modelo 1110"
          decoding="async"
          class="block w-full h-64 object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">
  </picture>
  <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
  <div class="absolute bottom-0 left-0 p-4 w-full text-center">
      <a href="{{ url('/junta-flexible-bsh-1110') }}">
          <h3 class="text-lg text-white font-bold">Junta de Expansión Estilo 1110</h3>
      </a>
  </div>
</li>

        <!-- Tarjeta 2 -->
        <li class="relative overflow-hidden group">
          <picture>
              <!-- Versión más pequeña (mobile-first) -->
              <source srcset="img/procesadas/111C-mosaico-ok-small.webp" type="image/webp" media="(max-width: 480px)">
              <source srcset="img/procesadas/111C-mosaico-ok-small.jpg" type="image/jpeg" media="(max-width: 480px)">
              
              <!-- Versión mediana -->
              <source srcset="img/procesadas/111C-mosaico-ok-medium.webp" type="image/webp" media="(max-width: 800px)">
              <source srcset="img/procesadas/111C-mosaico-ok-medium.jpg" type="image/jpeg" media="(max-width: 800px)">
              
              <!-- Versión grande -->
              <source srcset="img/procesadas/111C-mosaico-ok-large.webp" type="image/webp" media="(max-width: 1200px)">
              <source srcset="img/procesadas/111C-mosaico-ok-large.jpg" type="image/jpeg" media="(max-width: 1200px)">
              
              <!-- Fallback: imagen original o mayor tamaño -->
              <img
                  src="img/procesadas/111C-mosaico-ok-large.jpg"
                  alt="Junta de expansión modelo 111C"
                  decoding="async"
                  class="block w-full h-64 object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">
          </picture>
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
          <div class="absolute bottom-0 left-0 p-4  w-full text-center">
              <a href="{{ url('/junta-flexible-bsh-111c') }}">
                  <h3 class="text-lg text-white font-bold">Junta de Expansión Estilo 111C</h3>
              </a>
          </div>
        </li>

        <!-- Tarjeta 3 -->
        <li class="relative overflow-hidden group">
          <picture>
              <!-- Versión más pequeña (mobile-first) -->
              <source srcset="img/procesadas/111E-mosaico-ok-small.webp" type="image/webp" media="(max-width: 480px)">
              <source srcset="img/procesadas/111E-mosaico-ok-small.jpg" type="image/jpeg" media="(max-width: 480px)">
              
              <!-- Versión mediana -->
              <source srcset="img/procesadas/111E-mosaico-ok-medium.webp" type="image/webp" media="(max-width: 800px)">
              <source srcset="img/procesadas/111E-mosaico-ok-medium.jpg" type="image/jpeg" media="(max-width: 800px)">
              
              <!-- Versión grande -->
              <source srcset="img/procesadas/111E-mosaico-ok-large.webp" type="image/webp" media="(max-width: 1200px)">
              <source srcset="img/procesadas/111E-mosaico-ok-large.jpg" type="image/jpeg" media="(max-width: 1200px)">
              
              <!-- Fallback: imagen original o mayor tamaño -->
              <img
                  src="img/procesadas/111E-mosaico-ok-large.jpg"
                  alt="Junta flexible modelo 111E"
                  decoding="async"
                  class="block w-full h-64 object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">
          </picture>
          <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
          <div class="absolute bottom-0 left-0 p-4 w-full text-center">
              <a href="{{ url('/junta-flexible-bsh-111e') }}">
                  <h3 class="text-lg text-white font-bold">Junta de Expansión Estilo 111E</h3>
              </a>
          </div>
        </li>

       <!-- Tarjeta 4 -->
      <li class="relative overflow-hidden group">
        <picture>
            <source srcset="img/procesadas/1120-mosaico-ok-small.webp" type="image/webp" media="(max-width: 480px)">
            <source srcset="img/procesadas/1120-mosaico-ok-small.jpg" type="image/jpeg" media="(max-width: 480px)">
            <source srcset="img/procesadas/1120-mosaico-ok-medium.webp" type="image/webp" media="(max-width: 800px)">
            <source srcset="img/procesadas/1120-mosaico-ok-medium.jpg" type="image/jpeg" media="(max-width: 800px)">
            <source srcset="img/procesadas/1120-mosaico-ok-large.webp" type="image/webp" media="(max-width: 1200px)">
            <source srcset="img/procesadas/1120-mosaico-ok-large.jpg" type="image/jpeg" media="(max-width: 1200px)">
            <img
                src="img/procesadas/1120-mosaico-ok-large.jpg"
                alt="Junta de expansión modelo 1120"
                decoding="async"
                class="block w-full h-64 object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
        <div class="absolute bottom-0 left-0 p-4 w-full text-center">
            <a href="{{ url('/junta-flexible-bsh-1120') }}">
                <h3 class="text-lg text-white font-bold">Junta de Expansión Estilo 1120</h3>
            </a>
        </div>
      </li>

      <!-- Tarjeta 5 -->
      <li class="relative overflow-hidden group">
        <picture>
            <source srcset="img/procesadas/1130-mosaico-ok-small.webp" type="image/webp" media="(max-width: 480px)">
            <source srcset="img/procesadas/1130-mosaico-ok-small.jpg" type="image/jpeg" media="(max-width: 480px)">
            <source srcset="img/procesadas/1130-mosaico-ok-medium.webp" type="image/webp" media="(max-width: 800px)">
            <source srcset="img/procesadas/1130-mosaico-ok-medium.jpg" type="image/jpeg" media="(max-width: 800px)">
            <source srcset="img/procesadas/1130-mosaico-ok-large.webp" type="image/webp" media="(max-width: 1200px)">
            <source srcset="img/procesadas/1130-mosaico-ok-large.jpg" type="image/jpeg" media="(max-width: 1200px)">
            <img
                src="img/procesadas/1130-mosaico-ok-large.jpg"
                alt="Junta de expansión estilo 1130"
                decoding="async"
                class="block w-full h-64 object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
        <div class="absolute bottom-0 left-0 p-4 w-full text-center">
            <a href="{{ url('/junta-flexible-bsh-1130') }}">
                <h3 class="text-lg text-white font-bold">Junta de Expansión Estilo 1130</h3>
            </a>
        </div>
      </li>

      <!-- Tarjeta 6 -->
      <li class="relative overflow-hidden group">
        <picture>
            <source srcset="img/procesadas/2210-mosaico-ok-small.webp" type="image/webp" media="(max-width: 480px)">
            <source srcset="img/procesadas/2210-mosaico-ok-small.jpg" type="image/jpeg" media="(max-width: 480px)">
            <source srcset="img/procesadas/2210-mosaico-ok-medium.webp" type="image/webp" media="(max-width: 800px)">
            <source srcset="img/procesadas/2210-mosaico-ok-medium.jpg" type="image/jpeg" media="(max-width: 800px)">
            <source srcset="img/procesadas/2210-mosaico-ok-large.webp" type="image/webp" media="(max-width: 1200px)">
            <source srcset="img/procesadas/2210-mosaico-ok-large.jpg" type="image/jpeg" media="(max-width: 1200px)">
            <img
                src="img/procesadas/2210-mosaico-ok-large.jpg"
                alt="Junta de expansión modelo 2210"
                decoding="async"
                class="block w-full h-64 object-cover transition-transform duration-300 ease-in-out group-hover:scale-110">
        </picture>
        <div class="absolute inset-0 bg-gradient-to-b from-transparent to-black/70"></div>
        <div class="absolute bottom-0 left-0 p-4 w-full text-center">
            <a href="{{ url('/junta-flexible-bsh-2210') }}">
                <h3 class="text-lg text-white font-bold">Junta de Expansión Estilo 2210</h3>
            </a>
        </div>
      </li>

    </ul>




  </section>
  


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








<!-- Puntuar página -->
<div class="flex flex-col items-center box-border my-8" id="rating-container" data-page-id="{{ $pageId }}">
  <div class="box-border mb-2 text-lg">¡Haz clic para puntuar esta página!</div>
  <div id="star-rating" class="flex">
      @for ($i = 1; $i <= 5; $i++)
          <img src="/img/star_2.svg" data-rating="{{ $i }}" class="star cursor-pointer w-8 h-8" alt="Estrella {{ $i }}">
      @endfor
  </div>
  <div class="inline-block align-bottom ml-2 mt-2">
      <span class="text-sm">(Votos: <span id="votes-count">0</span> Promedio: <span id="average-rating">0</span>)</span>
  </div>
</div>



@endsection