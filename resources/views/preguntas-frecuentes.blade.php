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
    },
    {
      "@type": "Question",
      "name": "¿Qué normativas aplican a las juntas de expansión bridadas?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Las bridas de nuestras juntas se fabrican conforme a normas ANSI/ASME B16.5, DIN 2501/2502 o AWWA C207, según el estándar que ya use tu tubería. Dinos qué normativa manejas y fabricamos la junta compatible."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuál es la diferencia entre brida fija y brida loose (van stone)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La brida fija va integrada de forma permanente al cuerpo de la junta. La brida loose (o van stone) gira libremente sobre el cuello, lo que facilita alinear los barrenos durante la instalación sin tener que girar toda la junta."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué significa la clase de una brida (150#, 300#, etc.)?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La clase (150#, 300#, etc.) indica la presión nominal que soporta la brida a una temperatura de referencia. A mayor clase, mayor presión de trabajo admisible y, generalmente, mayor espesor y número de barrenos."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué diferencia hay entre arco simple, doble y triple en una junta de expansión?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "El número de arcos define cuánto movimiento puede absorber la junta: un arco simple absorbe menos desplazamiento pero es más económico, mientras que doble y triple arco absorben mayor movimiento axial, lateral y angular en espacios donde no es posible instalar una junta más larga."
      }
    },
    {
      "@type": "Question",
      "name": "¿Cuánto dura una junta de expansión flexible y qué mantenimiento requiere?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "La vida útil depende del material, el fluido y las condiciones de operación, pero con una selección correcta e inspección visual periódica (buscando grietas, abombamientos o fugas) muchas juntas operan varios años sin problema. Recomendamos revisarlas en cada mantenimiento programado de la línea."
      }
    },
    {
      "@type": "Question",
      "name": "¿Qué datos necesito para cotizar una junta de expansión?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Para darte una cotización precisa necesitamos: diámetro de tubería, norma y clase de brida, largo total disponible, y el fluido y temperatura que va a manejar. Puedes darnos estos datos directamente en nuestra Herramienta de Selección."
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

          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Qué normativas aplican a las juntas de expansión bridadas?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p>Las bridas de nuestras juntas se fabrican conforme a normas <strong>ANSI/ASME B16.5</strong>, <strong>DIN 2501/2502</strong> o <strong>AWWA C207</strong>, según el estándar que ya use tu tubería. Dinos qué normativa manejas y fabricamos la junta compatible.</p>
            </div>
          </details>

          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Cuál es la diferencia entre brida fija y brida loose (van stone)?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p class="mb-2"><strong>Brida fija:</strong> va integrada de forma permanente al cuerpo de la junta.</p>
              <p><strong>Brida loose (van stone):</strong> gira libremente sobre el cuello, lo que facilita alinear los barrenos durante la instalación sin girar toda la junta.</p>
            </div>
          </details>

          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Qué significa la clase de una brida (150#, 300#, etc.)?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p>Indica la presión nominal que soporta la brida a una temperatura de referencia. A mayor clase (150#, 300#...), mayor presión de trabajo admisible y, generalmente, mayor espesor y número de barrenos.</p>
            </div>
          </details>

          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Qué diferencia hay entre arco simple, doble y triple?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p>El número de arcos define cuánto movimiento puede absorber la junta: un <strong>arco simple</strong> absorbe menos desplazamiento pero es más económico; <strong>doble</strong> y <strong>triple arco</strong> absorben mayor movimiento axial, lateral y angular donde no es posible instalar una junta más larga.</p>
            </div>
          </details>

          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Cuánto dura una junta de expansión flexible y qué mantenimiento requiere?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p>Depende del material, el fluido y las condiciones de operación, pero con una selección correcta e inspección visual periódica (grietas, abombamientos, fugas) muchas juntas operan varios años sin problema. Recomendamos revisarlas en cada mantenimiento programado de la línea.</p>
            </div>
          </details>

          <details class="group">
            <summary class="flex items-center justify-between p-6 cursor-pointer hover:bg-blue-50 transition">
              <span class="font-semibold text-lg text-[#164ec9] group-hover:underline">❓ ¿Qué datos necesito para cotizar una junta de expansión?</span>
              <span class="ml-2 text-xl transform transition-transform group-open:rotate-180 text-[#164ec9]">&#9654;</span>
            </summary>
            <div class="p-6 text-gray-700">
              <p class="mb-2">Para darte una cotización precisa necesitamos:</p>
              <ul class="list-disc pl-5 space-y-2">
                <li>Diámetro de tubería.</li>
                <li>Norma y clase de brida.</li>
                <li>Largo total disponible.</li>
                <li>Fluido y temperatura a manejar.</li>
              </ul>
              <p class="mt-2">Puedes darnos estos datos directamente en nuestra <a href="{{ route('selecciona_juntas') }}" class="text-[#164ec9] font-semibold underline">Herramienta de Selección</a>.</p>
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

  

