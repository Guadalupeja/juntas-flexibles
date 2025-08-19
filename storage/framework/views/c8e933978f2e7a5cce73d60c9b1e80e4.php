<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo $__env->yieldContent('title', 'Juntas Flexibles BSH'); ?></title>
    <meta name="description" content="<?php echo $__env->yieldContent('description', 'Descripción por defecto'); ?>">
    
<!-- Preload del LCP: solo AVIF (si no hay soporte, el navegador lo ignora y usará WebP/JPG del <picture>) -->
<link
  rel="preload"
  as="image"
  href="/img/procesadas/Junta-de-expansion-bsh-mexico-large.avif"
  type="image/avif"
  imagesrcset="
    /img/procesadas/Junta-de-expansion-bsh-mexico-small.avif 480w,
    /img/procesadas/Junta-de-expansion-bsh-mexico-medium.avif 800w,
    /img/procesadas/Junta-de-expansion-bsh-mexico-large.avif 1200w
  "
  imagesizes="100vw"
  fetchpriority="high"
/>


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
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>

    <!-- Google Tag Manager: carga normal para evitar bloqueos -->
<!-- Sustituye tu loader diferido por esto en <head> -->
<link rel="preconnect" href="https://www.googletagmanager.com">
<link rel="dns-prefetch" href="https://www.googletagmanager.com">
<script>
  window.dataLayer = window.dataLayer || [];
  window.dataLayer.push({ 'gtm.start': Date.now(), event: 'gtm.js' });
</script>
<script async src="https://www.googletagmanager.com/gtm.js?id=GTM-MGF7LRG"></script>





    <link rel="icon" href="<?php echo e(asset('img/favicon-1.png')); ?>" type="image/x-icon" />

    <?php echo $__env->yieldContent('structured-data'); ?>
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
                    <a href="<?php echo e(url('/')); ?>">
                        <img src="<?php echo e(asset('img/log-bsh-final-01.png')); ?>" 
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
                        <a href="<?php echo e(url('/')); ?>" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">INICIO</a>
                        <a href="<?php echo e(url('/')); ?>#materiales" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">MATERIALES DE LAS JUNTAS</a>
                        <a href="<?php echo e(url('selecciona-juntas-de-expansion')); ?>" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">HERRAMIENTA DE SELECCIÓN</a>
                        <a href="<?php echo e(url('/')); ?>#movimientos" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">MOVIMIENTOS</a>
                        <a href="<?php echo e(url('estilos-juntas-de-expansion-bsh')); ?>" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">ESTILOS</a>
                        <a href="<?php echo e(url('https://www.bombasellos.com.mx/somos-bsh/')); ?>" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">NOSOTROS</a>
                        <a href="<?php echo e(url('https://www.bombasellos.com.mx/contacto/')); ?>" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">CONTACTO</a>
                        <a href="<?php echo e(url('https://blog.juntasflexibles.com/')); ?>" class="text-[#164ec9] text-xs px-2 py-2 hover:text-blue-700">BLOG</a>
                        <!-- Botón "COTIZAR AHORA" -->
                        <a href="<?php echo e(url('contact')); ?>" class="text-white bg-primaryRed rounded-[22px] px-4 py-3 hover:bg-primaryHover m-2 text-xs">
                            COTIZAR AHORA
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contenido principal -->
    <h1><?php echo $__env->yieldContent('titulo'); ?></h1>
    <hr>
    <?php echo $__env->yieldContent('contenido'); ?>

    <footer>
        <section class="bg-blue-900 font-roboto" data-id="a4a4df0" data-element_type="section">
            <div class="flex flex-wrap">
                <!-- Primera columna del footer -->
                <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                    <div>
                        <a href="<?php echo e(url('/')); ?>" class="block">
                            <img src="<?php echo e(asset('img/logo-bsh-white.png.webp')); ?>" alt="Bombas centrifugas, Sellos hidráulicos, hules industriales – BSH" width="640" height="480" class="w-64 h-auto p-4" loading="lazy">
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
                                <li><a href="<?php echo e(url('/')); ?>" class="text-sm">INICIO</a></li>
                                <li><a href="<?php echo e(url('#materiales')); ?>" class="text-sm">MATERIALES DE LAS JUNTAS</a></li>
                                <li><a href="<?php echo e(url('selecciona-juntas-de-expansion')); ?>" class="text-sm">HERRAMIENTA DE SELECCIÓN</a></li>
                                <li><a href="<?php echo e(url('#movimientos')); ?>" class="text-sm">MOVIMIENTOS</a></li>
                                <li><a href="<?php echo e(url('estilos-juntas-de-expansion-bsh')); ?>" class="text-sm">ESTILOS</a></li>
                                <li><a href="<?php echo e(url('https://www.bombasellos.com.mx/somos-bsh')); ?>" class="text-sm">NOSOTROS</a></li>
                                <li><a href="<?php echo e(url('https://www.bombasellos.com.mx/contacto')); ?>" class="text-sm">CONTACTO</a></li>
                                <li><a href="<?php echo e(url('blog')); ?>" class="text-sm">BLOG</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="p-4">
                        <p>
                            <a href="<?php echo e(url('aviso-de-privacidad')); ?>" class="text-sm text-white">AVISO DE PRIVACIDAD</a>
                        </p>
                    </div>
                </div>
<!-- Tercera columna del footer -->
<div class="w-full md:w-1/2 lg:w-1/3 p-4">
    <div class="p-4 text-white">
        <h3 class="text-2xl font-bold mb-4">CONTACTO</h3>

        <!-- Mapa -->
        <div class="rounded-xl overflow-hidden shadow-lg mb-6">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3773.0165043164975!2d-98.23402809999999!3d18.974878499999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cfb91e693c3dc1%3A0xaeeb79408ef2534b!2sBSH%20%E2%80%93%20Juntas%20de%20Expansi%C3%B3n!5e0!3m2!1ses!2smx!4v1752531827657!5m2!1ses!2smx" 
                width="100%" 
                height="250" 
                class="w-full border-0"
                allowfullscreen 
                loading="lazy" 
                referrerpolicy="no-referrer-when-downgrade">
            </iframe>
        </div>

        <!-- Datos de contacto -->
        <div class="text-sm leading-relaxed space-y-2">
            <p><strong>Nombre:</strong> Bombas Sellos y Hules Industriales SA de CV.</p>
            <p><strong>Abreviado:</strong> BSH SA de CV.</p>
            <p><strong>Dirección:</strong> Avenida 125 Oriente #226, Guadalupe Hidalgo, Puebla. C.P. 72494.</p>
            <p><strong>Teléfonos:</strong></p>
            <ul class="ml-4 list-disc space-y-1">
                <li>(55) 5752-1715</li>
                <li>(22) 2227-3866</li>
                <li>(83) 3246-2205</li>
                <li>(83) 3239-5885</li>
            </ul>
            <p><strong>Correo electrónico:</strong>
                <a href="mailto:bsh@bombasellos.com.mx" class="underline hover:text-gray-300">bsh@bombasellos.com.mx</a>
            </p>
        </div>
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
                            &copy; <?php echo e(date('Y')); ?> - Todos los derechos reservados. Bombas Sellos y Hules Industriales S.A. de C.V.
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
        
        <?php echo $__env->make('components.click-to-chat', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    </footer>
  

</body>
</html>
<?php /**PATH C:\Users\Lupit\Documents\juntas-flexibles\resources\views/layouts/app.blade.php ENDPATH**/ ?>