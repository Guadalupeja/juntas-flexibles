@extends('layouts.app')

@section('title', 'Preguntas frecuentes Juntas de Expansión | BSH ' . date('Y'))
@section('description', 'Descubre las preguntas frecuentes de las juntas BSH. Te explicamos los tipos, materiales recomendados. Cotiza en línea juntas personalizadas en ' . date('Y') . '.')

@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "¿Cómo puedo seleccionar adecuadamente el material de la junta de expansión que necesito?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Para seleccionar el material adecuado debes considerar el tipo de fluido, presión, temperatura, entorno y los movimientos a absorber. Si tienes dudas, nuestros expertos pueden ayudarte."
      }
    },
    {
      "@type": "Question",
      "name": "¿Dónde puedo solicitar más información?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Puedes llenar nuestro formulario de contacto o llamarnos directamente. Nuestro equipo te brindará asesoría técnica personalizada."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cómo saber si necesito una junta metálica, de caucho o con refuerzos especiales?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Depende del entorno y uso. Si hay altas temperaturas, usa juntas metálicas. Para vibraciones, mejor juntas de caucho con refuerzo. Para químicos, recomendamos Teflón o Viton."
      }
    },
    {
      "@type": "Question",
      "name": "¿De qué materiales están hechas las juntas de expansión flexibles?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "En BSH fabricamos juntas de Nitrilo, EPDM, Viton, Teflón y Neopreno, adaptándonos a cada necesidad industrial."
      }
    }
  ]
}
</script>
@endsection



@section('contenido')




@section('contenido')


<section class="w-full px-4 py-16 md:py-24 bg-gradient-to-br from-white to-blue-50 font-roboto">
    <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
      <!-- Columna izquierda -->
      <div class="text-center">
        <h1 class="text-2xl md:text-3xl font-bold text-[#164ec9] mb-6 leading-tight">
          Preguntas Frecuentes<br class="hidden md:block" />Juntas de Expansión
        </h1>
        <picture>
            <!-- WebP -->
            <source 
              type="image/webp" 
              srcset="
                {{ asset('/img/procesadas/Junta-de-expansion-bsh-mexico-small.webp') }} 480w,
                {{ asset('/img/procesadas/Junta-de-expansion-bsh-mexico-medium.webp') }} 800w,
                {{ asset('/img/procesadas/Junta-de-expansion-bsh-mexico-large.webp') }} 1200w"
              sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
        
            <!-- JPG -->
            <source 
              type="image/jpeg" 
              srcset="
                {{ asset('/img/procesadas/Junta-de-expansion-bsh-mexico-small.jpg') }} 480w,
                {{ asset('/img/procesadas/Junta-de-expansion-bsh-mexico-medium.jpg') }} 800w,
                {{ asset('/img/procesadas/Junta-de-expansion-bsh-mexico-large.jpg') }} 1200w"
              sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
        
            <!-- Fallback -->
            <img 
              src="{{ asset('/img/procesadas/Junta-de-expansion-bsh-mexico-large.jpg') }}" 
              alt="Imagen seleccion adecuada de juntas flexibles"
              class="w-full h-auto rounded-xl shadow-md"
              loading="lazy"
            />
          </picture>
      </div>
  
      <!-- Columna derecha: Acordeón -->
      <div>
        <div class="divide-y divide-gray-300 border border-gray-200 rounded-2xl shadow-lg overflow-hidden font-roboto bg-white">
          <!-- FAQ Item -->
          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Cómo puedo seleccionar adecuadamente el material de la junta de expansión que necesito?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p class="mb-4">✅ Para elegir el material correcto, considera:</p>
              <p class="space-y-2">
                Tipo de fluido que manejará la junta.<br>
                Rango de presión y temperatura.<br>
                Condiciones del ambiente (exposición a químicos, radiación UV, etc.).<br>
                Movimientos y desalineaciones que debe absorber.<br>
                Si tienes dudas, contáctanos y te asesoraremos en la selección adecuada.
              </p>
            </div>
          </details>
  
          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Dónde puedo solicitar más información?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p>Llena el formulario de contacto con tu pregunta específica o comunícate a nuestros teléfonos. ¡Con gusto te atenderemos!</p>
            </div>
          </details>
  
          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Cómo saber si necesito una junta metálica, de caucho o con refuerzos especiales?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p class="mb-4">✅ Depende del entorno y el uso de la junta.</p>
              <ul class="list-disc pl-5 space-y-2">
                <li><strong>Resistencia química:</strong> juntas con revestimiento de Teflón.</li>
                <li><strong>Altas temperaturas:</strong> juntas metálicas.</li>
                <li><strong>Absorber vibraciones:</strong> juntas de caucho con refuerzos internos.</li>
              </ul>
              <p class="mt-2">Si no estás seguro, <strong>podemos ayudarte a elegir la mejor opción</strong>.</p>
            </div>
          </details>
  
          <details class="group" open>
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿De qué materiales están hechas las juntas de expansión flexibles?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p class="mb-4">✅ En BSH fabricamos juntas con:</p>
              <ul class="list-disc pl-5 space-y-2">
                <li><strong>Nitrilo (NBR):</strong> Para aceites y derivados del petróleo.</li>
                <li><strong>EPDM:</strong> Resistente a temperaturas y agentes atmosféricos.</li>
                <li><strong>Viton (FKM):</strong> Ideal para productos químicos agresivos.</li>
                <li><strong>Teflón (PTFE):</strong> Para aplicaciones en la industria farmacéutica y alimenticia.</li>
                <li><strong>Neopreno:</strong> Alta resistencia mecánica y química.</li>
              </ul>
            </div>
          </details>
        </div>
      </div>
    </div>
  </section>
  
  




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


<script>
    document.addEventListener('DOMContentLoaded', () => {
      const detailsElements = document.querySelectorAll('details');
      detailsElements.forEach(targetDetail => {
        targetDetail.addEventListener('toggle', () => {
          if (targetDetail.open) {
            detailsElements.forEach(detail => {
              if (detail !== targetDetail) {
                detail.removeAttribute('open');
              }
            });
          }
        });
      });
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

  

