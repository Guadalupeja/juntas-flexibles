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
    "price": "0",  // Si no hay precio fijo, puedes omitir este campo o dejarlo en "0"
    "priceValidUntil": "9999-12-31",
    "availability": "https://schema.org/InStock"
  }
  // Si no tienes calificaciones reales, es mejor omitir el bloque de aggregateRating
}
</script>
@endsection



@section('contenido')








<!--segunda fila-->
<section class="w-full bg-cover bg-center bg-no-repeat items-center justify-center text-white font-roboto
grid grid-cols-1  /* Por defecto, 1 columna */
lg:grid-cols-2    /* A partir de lg: 2 columnas */"
          
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





          <!-- CONTENEDOR PRINCIPAL -->
          <div class="relative w-full min-h-screen flex flex-col 
                      items-center justify-center text-center
                      text-white font-['Roboto',sans-serif]">

            <!-- Bloque Heading -->
            <div>
              <!-- h2 con estilos Tailwind -->
              <h2 class="text-4xl font-bold leading-snug m-5 p-5">
                Cotizar juntas de expansión
              </h2>
            </div>

            <!-- Bloque de texto -->
            <div class="leading-relaxed p-5">
              <p class="m-[1.75em]">
                <span class="font-bold">Puebla</span>
              </p>
              <p class="mb-[1.75em]">
                Avenida 125 Oriente #226, Guadalupe Hidalgo. Puebla. C.P. 72494..<br>
                222 227 3866<br>
                bsh@bombasellos.com.mx
              </p>

              <p class="mb-[1.75em]">
                <span class="font-bold">Matriz</span>
              </p>
              <p class="mb-[1.75em]">
                Limón #1404, Ampliación Monte Alto, Altamira, Tamaulipas, C.P. 89606.<br>
                Tel: (0183) 3375-3249<br>
                bsh@bombasellos.com.mx
              </p>

              <p class="mb-[1.75em]">
                <span class="font-bold">CDMX</span>
              </p>
              <p class="mb-[1.75em]">
                Otavalo número 91, Colonia Lindavista, Delegación Gustavo A. Madero, México, Distrito Federal.<br>
                Teléfono: (0155) 5752-1715<br>
                bsh@bombasellos.com.mx
              </p>
            </div>

          </div>










         <div id="contacto" class="">
         <h1 class="encabezado text-white m-5">Contacto juntas de expansión</h1>
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
