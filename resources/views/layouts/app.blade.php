<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', 'Juntas Flexibles BSH')</title>
    <meta name="description" content="@yield('description', 'Descripción por defecto')">

    <!-- Optimized Google Fonts: se usa solo la versión moderna con preload y media="print" -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet" media="print" onload="this.media='all'">
    <noscript>
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    </noscript>

    <!-- AlpineJS se carga de forma deferida -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- Vite assets: CSS y JS minificados en producción -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Google Tag Manager: carga asíncrona para evitar bloqueos -->
    <!-- GTM – versión optimizada -->
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">

<script>
  /* ① Stub ligero: deja dataLayer listo sin traer gtm.js todavía */
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({
    'gtm.start': Date.now(),
    event: 'gtm.init'
  });

  /* ② Función que cargará gtm.js cuando le llamemos */
  function loadGTM () {
    if (window.gtmLoaded) return;           // evita doble inyección
    window.gtmLoaded = true;

    const s   = document.createElement('script');
    s.src     = 'https://www.googletagmanager.com/gtm.js?id=GTM-MGF7LRG&l=dataLayer';
    s.async   = true;
    document.head.appendChild(s);
  }

  /* ③ Disparador: después de la primera pintura (FCP) + 500 ms */
  try {
    const obs = new PerformanceObserver((list) => {
      setTimeout(loadGTM, 2500);             // pequeño margen
      obs.disconnect();
    });
    obs.observe({ type: 'paint', buffered: true });
  } catch (e) {
    /* Navegador antiguo ⇒ cargamos tras el evento load */
    window.addEventListener('load', () => setTimeout(loadGTM, 1000));
  }

  /* ④ Respaldo extra por interacción del usuario (opcional) */
  ['scroll','pointerdown','keydown'].forEach(evt =>
    addEventListener(evt, loadGTM, { once:true, passive:true })
  );
</script>


    <link rel="icon" href="{{ asset('img/favicon-1.png') }}" type="image/x-icon" />

    @yield('structured-data')
</head>
<body>
    <!-- Google Tag Manager (noscript) -->
   <!-- GTM (noscript) – respaldo sin JS -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MGF7LRG"
            height="0" width="0"
            style="display:none;visibility:hidden" loading="lazy"></iframe>
  </noscript>
  

    <!-- Sección de contacto superior (información crítica, se carga de forma inmediata) -->
    <section class="hidden md:block bg-gray-200 transition duration-300 ease-in-out border border-transparent rounded">
        <div class="max-w-7xl mx-auto relative flex">
            <!-- Email -->
            <div class="w-1/5 min-h-0 flex">
                <div class="p-4 flex">
                    <div class="transition-all duration-300 ease-in-out flex items-center">
                        <i class="fa-solid fa-envelope text-gray-400"></i>
                        <div class="pl-1">
                            <a href="mailto:bsh@bombasellos.com.mx" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">bsh@bombasellos.com.mx</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teléfono 1 -->
            <div class="w-1/6">
                <div class="p-4 flex">
                    <div class="transition-all duration-300 ease-in-out flex items-center">
                        <i class="fa-solid fa-phone text-gray-400"></i>
                        <div class="pl-1">
                            <a href="tel:+525557521715" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">55 575 21715</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Teléfono 2 -->
            <div class="w-1/6">
                <div class="p-4 flex">
                    <div class="transition-all duration-300 ease-in-out flex items-center">
                        <i class="fa-solid fa-phone text-gray-400"></i>
                        <div class="pl-1">
                            <a href="tel:+52222273866" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">222 227 3866</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WhatsApp 1 -->
            <div class="w-1/6">
                <div class="p-4 flex">
                    <div class="transition-all duration-300 ease-in-out flex items-center">
                        <i class="fa-brands fa-whatsapp text-gray-400"></i>
                        <div class="pl-1">
                            <a href="https://api.whatsapp.com/send?phone=5218332395885&amp;text=Hola%20me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">833 239 5885</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- WhatsApp 2 -->
            <div class="w-1/6">
                <div class="p-4 flex">
                    <div class="transition-all duration-300 ease-in-out flex items-center">
                        <i class="fa-brands fa-whatsapp text-gray-400"></i>
                        <div class="pl-1">
                            <a href="https://api.whatsapp.com/send?phone=5218332462205&amp;text=Hola%20me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20" class="text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out">833 2462205</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Redes Sociales -->
            <div class="w-1/6">
                <div class="p-4 flex">
                    <div class="transition-all duration-300 ease-in-out flex items-center">
                        <a href="https://www.facebook.com/Bombas-Sellos-y-Hules-Industriales-SA-de-CV-116434456400428" target="_blank" class="inline-flex items-center justify-center text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out no-underline ml-4">
                            <span class="sr-only">Facebook</span>
                            <i class="fa-brands fa-facebook text-[25px]"></i>
                        </a>
                        <a href="https://www.linkedin.com/company/bombas-sellos-y-hules-industriales-bsh" target="_blank" class="inline-flex items-center justify-center text-blue-500 hover:text-blue-700 transition duration-300 ease-in-out no-underline ml-4">
                            <span class="sr-only">LinkedIn</span>
                            <i class="fa-brands fa-linkedin text-[25px]"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navegación principal -->
    <section class="transition-all bg-white" data-id="ababfc0" data-element_type="section" data-settings='{"background_background":"classic"}'>
        <div class="max-w-7xl mx-auto px-4 md:px-0 py-4">
            <div class="flex flex-col md:flex-row items-center">
                <!-- Logo (contenido crítico, no se aplica lazy-loading) -->
                <div class="w-full md:w-1/5 mb-4 md:mb-0 md:mr-4">
                    <a href="{{ url('/') }}">
                        <img src="{{ asset('img/log-bsh-final-01.png') }}" 
                             alt="Bombas centrifugas, Sellos hidráulicos, hules industriales – BSH" 
                             class="w-32 lg:w-[230px] max-w-full h-auto">
                    </a>
                </div>

                <!-- Menú -->
                <div class="w-full md:w-4/5 flex flex-col md:flex-row md:justify-end items-center">
                    <!-- Botón de menú para móviles -->
                    <button id="menu-toggle" class="block md:hidden focus:outline-none mb-4 md:mb-0" aria-label="Toggle navigation menu">
                        <span class="flex flex-col">
                            <span class="w-6 h-px bg-gray-600 mb-1 transition-all duration-300"></span>
                            <span class="w-6 h-px bg-gray-600 mb-1 transition-all duration-300"></span>
                            <span class="w-6 h-px bg-gray-600 mb-1 transition-all duration-300"></span>
                        </span>
                    </button>
                    <!-- Enlaces del menú -->
                    <div id="menu-items" class="font-roboto font-medium bg-gray-900 w-full items-center flex flex-col md:ml-2 hidden md:block md:bg-white">
                        <a href="{{ url('/') }}" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">INICIO</a>
                        <a href="{{ url('/') }}#materiales" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">MATERIALES DE LAS JUNTAS</a>
                        <a href="{{ url('selecciona-juntas-de-expansion') }}" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">HERRAMIENTA DE SELECCIÓN</a>
                        <a href="{{ url('/') }}#movimientos" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">MOVIMIENTOS</a>
                        <a href="{{ url('estilos-juntas-de-expansion-bsh') }}" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">ESTILOS</a>
                        <a href="{{ url('https://www.bombasellos.com.mx/somos-bsh/') }}" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">NOSOTROS</a>
                        <a href="{{ url('https://www.bombasellos.com.mx/contacto/') }}" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">CONTACTO</a>
                        <a href="{{ url('https://blog.juntasflexibles.com/') }}" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">BLOG</a>
                        <!-- Botón "COTIZAR AHORA" -->
                        <a href="{{ url('contact') }}" class="text-white bg-primaryRed rounded-[22px] px-4 py-3 hover:bg-primaryHover m-2 text-xs">
                            COTIZAR AHORA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido principal -->
    <h1>@yield('titulo')</h1>
    <hr>
    @yield('contenido')

    <footer>
        <section class="bg-blue-900 font-roboto" data-id="a4a4df0" data-element_type="section">
            <div class="flex flex-wrap">
                <!-- Primera columna del footer -->
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <div>
                        <a href="{{ url('/') }}" class="block">
                            <img src="{{ asset('img/logo-bsh-white.png.webp') }}" alt="Bombas centrifugas, Sellos hidráulicos, hules industriales – BSH" width="640" height="480" class="w-64 h-auto p-4" loading="lazy">
                        </a>
                    </div>
                    <div class="h-4"></div>
                    <div class="p-12">
                        <p class="text-white text-sm leading-[1.8] text-justify">
                            Juntas de Expansión de Hules convencionales y especiales para cualquier industria. Fabricamos sobre especificación o diseño.
                        </p>
                    </div>
                    <div class="h-4"></div>
                    <div class="p-4">
                        <div class="flex justify-center">
                            <a href="https://www.facebook.com/Bombas-Sellos-y-Hules-Industriales-SA-de-CV-116434456400428" target="_blank" class="inline-flex items-center justify-center text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out no-underline ml-4">
                                <span class="sr-only">Facebook</span>
                                <i class="fa-brands fa-facebook text-gray-400 text-3xl"></i>
                            </a>
                            <a href="https://www.linkedin.com/company/bombas-sellos-y-hules-industriales-bsh" target="_blank" class="inline-flex items-center justify-center text-gray-400 hover:text-gray-600 transition duration-300 ease-in-out no-underline ml-4">
                                <span class="sr-only">Linkedin-square</span>
                                <i class="fa-brands fa-linkedin text-gray-400 text-3xl"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- Segunda columna del footer -->
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <div class="p-4">
                        <div class="text-2xl font-semibold text-white p-4">MAPA DEL SITIO</div>
                    </div>
                    <div class="p-4">
                        <button id="toggle-sitemap" type="button" class="block md:hidden text-white" aria-label="Toggle sitemap">
                            <i class="fas fa-bars"></i>
                        </button>
                        <div id="sitemap-items" class="hidden md:block">
                            <ul class="text-white">
                                <li><a href="{{ url('/') }}" class="text-sm">INICIO</a></li>
                                <li><a href="{{ url('#materiales') }}" class="text-sm">MATERIALES DE LAS JUNTAS</a></li>
                                <li><a href="{{ url('selecciona-juntas-de-expansion') }}" class="text-sm">HERRAMIENTA DE SELECCIÓN</a></li>
                                <li><a href="{{ url('#movimientos') }}" class="text-sm">MOVIMIENTOS</a></li>
                                <li><a href="{{ url('estilos-juntas-de-expansion-bsh') }}" class="text-sm">ESTILOS</a></li>
                                <li><a href="{{ url('https://www.bombasellos.com.mx/somos-bsh') }}" class="text-sm">NOSOTROS</a></li>
                                <li><a href="{{ url('https://www.bombasellos.com.mx/contacto') }}" class="text-sm">CONTACTO</a></li>
                                <li><a href="{{ url('blog') }}" class="text-sm">BLOG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4">
                        <p>
                            <a href="{{ url('aviso-de-privacidad') }}" class="text-sm text-white">AVISO DE PRIVACIDAD</a>
                        </p>
                    </div>
                </div>
                <!-- Tercera columna del footer -->
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <div class="p-4">
                        <div class="text-xl font-semibold text-white p-4">CONTACTO</div>
                    </div>
                    <div class="p-4">
                        <p class="text-white">
                            <span>-Nombre: Bombas Sellos y Hules Industriales SA de CV.</span><br>
                            <span>-Abreviado: BSH SA de CV.</span><br>
                            <span>-Dirección: Avenida 125 Oriente #226, Guadalupe Hidalgo. Puebla. C.P. 72494.</span><br>
                            <span>-Teléfonos:</span><br>
                            <span>(55)5752-1715</span><br>
                            <span>(22)2227-3866</span><br>
                            <span>(83)3246-2205</span><br>
                            <span>(83)3239-5885</span><br>
                            <span>
                                <a href="mailto:bsh@bombasellos.com.mx">-Correo electrónico: bsh@bombasellos.com.mx</a>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Barra de derechos -->
        <div class="border-t border-gray-500"></div>
        <!-- Derechos de autor -->
        <section class="bg-blue-900 py-8">
            <div class="container mx-auto flex flex-wrap">
                <div class="w-full md:w-1/2 px-4">
                    <div class="text-gray-700">
                        <p class="text-base text-gray-400">
                            &copy; {{ date('Y') }} - Todos los derechos reservados. Bombas Sellos y Hules Industriales S.A. de C.V.
                        </p>
                    </div>
                </div>
                <div class="w-full md:w-1/2 px-4">
                    <div class="text-gray-700 text-right">
                        <p class="text-base text-white">LUN – VIE: 9.00 – 18.00&nbsp; SAB/SUN: CLOSED</p>
                    </div>
                </div>
            </div>
        </section>
        
        @include('components.click-to-chat')
    </footer>
</body>
</html>
