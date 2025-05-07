@extends('layouts.app')

@section('title', 'Estilos de juntas de expansión de tuberias calidad premium')
@section('description', 'Estilos juntas de expansión: Diseños probados en laboratorio, excepcional desempeño condiciones dinámicas, resistencia a presión, flujos adecuados de calidad')


@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Juntas de Expansión Estilos 1000, 1110, 1120, 1130, 111C, 111E, 2210",
  "description": "Juntas de expansión BSH en múltiples estilos: conectores rectos, carretes de arco simple, doble y triple, así como cónicas concéntricas y excéntricas. Diseños probados para resistencia a presión, vibración, vacío, turbulencia y compatibilidad con normas ANSI, DIN y ASME.",
  "brand": {
    "@type": "Brand",
    "name": "BSH"
  },
  "image": [
    "https://juntasflexibles.com/img/procesadas/junta-de-expansion-bsh-mexico-large.jpg",
    "https://juntasflexibles.com/img/procesadas/junta-de-expansion-de-triple-arco-con-bridas-de-hule-1-large.jpg",
    "https://juntasflexibles.com/img/procesadas/junta-de-expansion-conica-excentrica-1-large.jpg"
  ],
  "url": "https://juntasflexibles.com/",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "MXN",
    "priceValidUntil": "9999-12-31",
    "availability": "https://schema.org/InStock",
    "url": "https://juntasflexibles.com/"
  }
}
</script>
@endsection




@section('contenido')


                <!-- Sección principal -->
                <section class="bg-[#073e81] min-h-[318px] flex items-center justify-center
                py-8 px-4 text-white font-['Roboto',sans-serif] leading-[1.2]">

                <!-- Contenedor con ancho máximo de 800px -->
                <div class="max-w-[800px] w-full flex flex-col items-center gap-6">

                <!-- Título -->
                <h1 class="text-[39px] leading-[1.2] font-bold m-0 p-0 justify-start">
                Estilos Juntas de Expansión BSH
                </h1>

                <!-- Texto descriptivo -->
                <div class="space-y-4">
                <p>
                Diseños rigurosamente probados en laboratorio y campo con 25 años de desarrollo.
                </p>
                <p>
                Excepcional desempeño en todas las condiciones dinámicas, resistencia a la presión 
                y ruptura sin sacrificar flujos adecuados libres de turbulencia.
                </p>
                </div>

                <!-- Botón (COTIZAR AHORA) -->
                <div>
                <a href="#cotizar"
                class="inline-block bg-[#5a0f0d] text-white font-black text-sm 
                px-8 py-3 rounded-full border border-[#5a0f0d]
                transition-all duration-300 hover:bg-white hover:text-[#5a0f0d]">
                COTIZAR AHORA
                </a>
                </div>

                </div>
                </section>





                <section id="1110"
                class="overflow-hidden w-full 
                       flex items-center justify-center 
                       bg-white py-8 px-4">
              
                <!-- Contenedor con ancho máximo (similar a "section-boxed") -->
                <div class="max-w-[1140px] w-full flex flex-wrap items-center">
              
                  <!-- Columna 1 (33%) con imagen -->
                  <div class="w-full md:w-1/3 p-2 flex items-center justify-center">
                    <picture>
                        <!-- Fuente para navegadores que soportan WebP -->
                        <source 
                            type="image/webp" 
                            srcset="
                                {{ asset('img/procesadas/junta-de-expansion-tipo-carrete-de-arco-sencillo-con-bridas-de-hule-small.webp') }} 480w,
                                {{ asset('img/procesadas/junta-de-expansion-tipo-carrete-de-arco-sencillo-con-bridas-de-hule-medium.webp') }} 800w,
                                {{ asset('img/procesadas/junta-de-expansion-tipo-carrete-de-arco-sencillo-con-bridas-de-hule-large.webp') }} 1200w"
                            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                        
                        <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                        <source 
                            type="image/jpeg" 
                            srcset="
                                {{ asset('img/procesadas/junta-de-expansion-tipo-carrete-de-arco-sencillo-con-bridas-de-hule-small.jpg') }} 480w,
                                {{ asset('img/procesadas/junta-de-expansion-tipo-carrete-de-arco-sencillo-con-bridas-de-hule-medium.jpg') }} 800w,
                                {{ asset('img/procesadas/junta-de-expansion-tipo-carrete-de-arco-sencillo-con-bridas-de-hule-large.jpg') }} 1200w"
                            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                        
                        <!-- Etiqueta img como último recurso -->
                        <img 
                          id="imagen_destacada_img"
                            src="{{ asset('img/procesadas/junta-de-expansion-tipo-carrete-de-arco-sencillo-con-bridas-de-hule-large.jpg') }}" 
                            alt="Imagen Destacada" 
                            class="mx-auto w-[370px] transition-transform duration-300 ease-in-out hover:scale-110">
                    </picture>
                  </div>
              
                  <!-- Columna 2 (66%) con contenido -->
                  <div class="w-full md:w-2/3 p-4 flex flex-col justify-center text-[#073e81] font-['Roboto',sans-serif]">
                    <!-- Título -->
                    <h2 class="text-[39px] font-bold leading-[1.4] mb-4">
                      Junta de expansión Estilo 1110
                    </h2>
              
                    <!-- Texto descriptivo -->
                    <div class="space-y-6 text-[15px]">
                      <p class="mb-0">
                        Junta tipo carrete con diseño de arco estrecho estándar. 
                        Disponible en arco simple o múltiples arcos.
                      </p>
                      <p class="mb-0">
                        Apta para condiciones de alta presión (300 psi) y vacío.
                      </p>
                      <p class="mb-0">
                        Diseño integral de las bridas de hule NORMA ANSI B16.5 
                        que no requiere empaques.
                      </p>
                      <p class="mb-0">
                        Otras configuraciones de Brida sobre pedido:
                      </p>
                      <p class="mb-0">
                        ASME B16.5 / B16.47 Serie A Clase 125/150 (estándar)
                      </p>
                      <p class="mb-0">
                        ASME B16.5 / B16.47 Serie A Clase 250/300<br>
                        EN 1092-1 PN10<br>
                        EN 1092-1 PN16<br>
                        Disponibles en todo el rango de materiales de revestimiento 
                        y en diámetros nominales de 1 a 72 pulgadas con tubo 
                        de hasta 21 pulgadas de largo.
                      </p>
                    </div>
              
                    <!-- Botón (opcional si está oculto) -->
                    <div class="mt-6">
                      <a href="#cotizar"
                         class="inline-block bg-[#5a0f0d] text-white font-black
                                text-sm rounded-full px-8 py-3 border border-[#5a0f0d]
                                transition-all duration-300 hover:bg-white hover:text-[#5a0f0d]">
                        COTIZAR AHORA
                      </a>
                    </div>
              
                  </div>
                </div>
              </section>
              




              <section id="1120" 
              class="overflow-hidden w-full 
                     flex items-center justify-center 
                     bg-white py-8 px-4">
            
              <!-- Contenedor “boxed” con ancho máximo -->
              <div class="max-w-[1140px] w-full flex flex-wrap items-center">
            
                <!-- Columna izquierda (33%) con imagen -->
                <div class="w-full md:w-1/3 p-5 flex items-center justify-center">
                    <picture>
                        <!-- Fuente para navegadores que soportan WebP -->
                        <source 
                            type="image/webp" 
                            srcset="
                                {{ asset('img/procesadas/junta-de-expansion-de-doble-arco-con-bridas-de-hule-1-1-small.webp') }} 480w,
                                {{ asset('img/procesadas/junta-de-expansion-de-doble-arco-con-bridas-de-hule-1-1-medium.webp') }} 800w,
                                {{ asset('img/procesadas/junta-de-expansion-de-doble-arco-con-bridas-de-hule-1-1-large.webp') }} 1200w"
                            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                        
                        <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                        <source 
                            type="image/jpeg" 
                            srcset="
                                {{ asset('img/procesadas/junta-de-expansion-de-doble-arco-con-bridas-de-hule-1-1-small.jpg') }} 480w,
                                {{ asset('img/procesadas/junta-de-expansion-de-doble-arco-con-bridas-de-hule-1-1-medium.jpg') }} 800w,
                                {{ asset('img/procesadas/junta-de-expansion-de-doble-arco-con-bridas-de-hule-1-1-large.jpg') }} 1200w"
                            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                        
                        <!-- Etiqueta img como último recurso -->
                        <img 
                          id="imagen_destacada_img"
                            src="{{ asset('img/procesadas/junta-de-expansion-de-doble-arco-con-bridas-de-hule-1-1-large.jpg') }}" 
                            alt="Imagen Junta de expansión 1120" 
                            class="mx-auto w-[370px] transition-transform duration-300 ease-in-out hover:scale-110">
                    </picture>
                </div>
            
                <!-- Columna derecha (66%) con contenido -->
                <div class="w-full md:w-2/3 p-5 flex flex-col justify-center font-['Roboto',sans-serif]">
                  
                  <!-- Título -->
                  <h2 class="text-[39px] font-bold leading-[1.4] text-[#073e81] mb-6">
                    Junta de expansión Estilo 1120
                  </h2>
            
                  <!-- Texto descriptivo -->
                  <div class="space-y-6 text-[#073e81] text-[15px]">
                    <p>
                      De dos arcos con Bridas integrales de hule conforme NORMA ANSI B16.5.
                    </p>
                    <p>
                      Configuraciones de arco estándar y arco rellenos en toda la gama 
                      de recubrimientos y refuerzos.
                    </p>
                    <p>
                      Su diseño permite mayor amplitud de movimientos.
                    </p>
                    <p>
                      Disponible en todo el rango de materiales y diámetros nominales 
                      de 1 pulgada hasta 113 pulgadas con fuelles de hasta 14 pulgadas.
                    </p>
                  </div>
            
                  <!-- Botón “COTIZAR AHORA” -->
                  <div class="mt-6">
                    <a href="#cotizar"
                       class="inline-block bg-[#5a0f0d] text-white font-black
                              text-sm rounded-full px-8 py-3 border border-[#5a0f0d]
                              transition-all duration-300 hover:bg-white hover:text-[#5a0f0d]">
                      COTIZAR AHORA
                    </a>
                  </div>
            
                </div>
              </div>
            </section>
            




            <section id="1130" 
            class="overflow-hidden w-full 
                   flex items-center justify-center 
                   bg-white py-8 px-4">
          
            <!-- Contenedor “boxed” con ancho máximo -->
            <div class="max-w-[1140px] w-full flex flex-wrap items-center">
          
              <!-- Columna Izquierda (33%) con imagen -->
              <div class="w-full md:w-1/3 p-4 flex items-center justify-center">
                <picture>
                  <!-- Fuente para navegadores que soportan WebP -->
                  <source 
                      type="image/webp" 
                      srcset="
                          {{ asset('img/procesadas/unta-de-expansion-de-triple-arco-con-bridas-de-hule-1-small.webp') }} 480w,
                          {{ asset('img/procesadas/unta-de-expansion-de-triple-arco-con-bridas-de-hule-1-medium.webp') }} 800w,
                          {{ asset('img/procesadas/unta-de-expansion-de-triple-arco-con-bridas-de-hule-1-large.webp') }} 1200w"
                      sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                  
                  <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                  <source 
                      type="image/jpeg" 
                      srcset="
                          {{ asset('img/procesadas/unta-de-expansion-de-triple-arco-con-bridas-de-hule-1-small.jpg') }} 480w,
                          {{ asset('img/procesadas/unta-de-expansion-de-triple-arco-con-bridas-de-hule-1-medium.jpg') }} 800w,
                          {{ asset('img/procesadas/unta-de-expansion-de-triple-arco-con-bridas-de-hule-1-large.jpg') }} 1200w"
                      sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                  
                  <!-- Etiqueta img como último recurso -->
                  <img 
                    id="imagen_destacada_img"
                      src="{{ asset('img/procesadas/unta-de-expansion-de-triple-arco-con-bridas-de-hule-1-large.jpg') }}" 
                      alt="Imagen Junta de expansión 1130" 
                      class="mx-auto w-[370px] transition-transform duration-300 ease-in-out hover:scale-110">
              </picture>
              </div>
          
              <!-- Columna Derecha (66%) con contenido -->
              <div class="w-full md:w-2/3 p-4 flex flex-col justify-center text-[#073e81] font-['Roboto',sans-serif]">
                
                <!-- Título -->
                <h2 class="text-[39px] font-bold leading-[1.4] mb-6">
                  Junta de expansión Estilo 1130
                </h2>
          
                <!-- Texto Descriptivo -->
                <div class="space-y-6 text-[#073e81] text-[15px]">
                  <p>Diseño de tres arcos para desplazamientos laterales de hasta 4 pulgadas.</p>
                  <p>Disponibles en arco estándar, arco fluido y arco relleno en todo el rango de materiales para revestimientos.</p>
                  <p>Bridas de hules integrales que no requieren empaques.</p>
                  <p>Se pueden surtir acoplamientos concéntricos reductores y excéntricos para unir tuberias de diámetros diferentes.</p>
                  <p>Diámetros nominales de hasta 30 pulgadas y tubos de hasta 18 pulgadas de largo.</p>
                </div>
          
                <!-- Botón Cotizar -->
                <div class="mt-6">
                  <a href="#cotizar"
                     class="inline-block bg-[#5a0f0d] text-white font-black
                            text-sm rounded-full px-8 py-3 border border-[#5a0f0d]
                            transition-all duration-300 hover:bg-white hover:text-[#5a0f0d]">
                    COTIZAR AHORA
                  </a>
                </div>
          
              </div>
            </div>
          </section>
          


          <section id="2210"
          class="overflow-hidden w-full 
                 flex items-center justify-center 
                 bg-white py-8 px-4">
        
          <!-- Contenedor principal (boxed) con ancho máximo -->
          <div class="max-w-[1140px] w-full flex flex-wrap items-center min-h-[549px]">
        
            <!-- Columna Izquierda (33%) con imagen -->
            <div class="w-full md:w-1/3 p-5 flex items-center justify-center">
              <picture>
                <!-- Fuente para navegadores que soportan WebP -->
                <source 
                    type="image/webp" 
                    srcset="
                        {{ asset('img/procesadas/junta-de-expansión-de-arco-fluido-con-bridas-de-acero-small.webp') }} 480w,
                        {{ asset('img/procesadas/junta-de-expansión-de-arco-fluido-con-bridas-de-acero-medium.webp') }} 800w,
                        {{ asset('img/procesadas/junta-de-expansión-de-arco-fluido-con-bridas-de-acero-large.webp') }} 1200w"
                    sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                
                <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                <source 
                    type="image/jpeg" 
                    srcset="
                        {{ asset('img/procesadas/junta-de-expansión-de-arco-fluido-con-bridas-de-acero-small.jpg') }} 480w,
                        {{ asset('img/procesadas/junta-de-expansión-de-arco-fluido-con-bridas-de-acero-medium.jpg') }} 800w,
                        {{ asset('img/procesadas/junta-de-expansión-de-arco-fluido-con-bridas-de-acero-large.jpg') }} 1200w"
                    sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                
                <!-- Etiqueta img como último recurso -->
                <img 
                  id="imagen_destacada_img"
                    src="{{ asset('img/procesadas/junta-de-expansión-de-arco-fluido-con-bridas-de-acero-large.jpg') }}" 
                    alt="Imagen Junta de expansión 2210" 
                    class="mx-auto w-[370px] transition-transform duration-300 ease-in-out hover:scale-110">
            </picture>
            </div>
        
            <!-- Columna Derecha (66%) con contenido -->
            <div class="w-full md:w-2/3 p-5 flex flex-col justify-center text-[#073e81] font-['Roboto',sans-serif]">
        
              <!-- Título -->
              <h2 class="text-[39px] font-bold leading-[1.4] mb-6">
                Junta de expansión Estilo 2210
              </h2>
        
              <!-- Texto descriptivo -->
              <div class="space-y-6 text-[#073e81] text-[15px]">
                <p>Junta de un arco fluido con bridas en acero A-36 según Norma ANSI B16.5. No requiere empaques de sellado.</p>
                <p>Gran capacidad de movimientos direccionales y sistema de autolimpieza reduciendo la acumulación de sedimentos.</p>
                <p>Baja resistencia al flujo y eliminación de turbulencias.</p>
                <p>Observancia normativas ANSI 125, 150 y DIN sobre petición.</p>
                <p>Garantiza mejor absorción de vibración, ruido y choque que cualquiera de la competencia.</p>
                <p>Disponible en todo el rango de revestimientos.</p>
              </div>
        
              <!-- Botón: COTIZAR AHORA -->
              <div class="mt-6">
                <a href="#cotizar"
                   class="inline-block bg-[#5a0f0d] text-white font-black text-sm 
                          rounded-full px-8 py-3 border border-[#5a0f0d]
                          transition-all duration-300
                          hover:bg-white hover:text-[#5a0f0d]">
                  COTIZAR AHORA
                </a>
              </div>
        
            </div>
          </div>
        </section>
        
    <!--generar imagen responsiva-->

        <section id="111c" 
        class="overflow-hidden w-full 
               flex items-center justify-center 
               bg-white py-8 px-4">
      
        <!-- Contenedor “boxed” con ancho máximo -->
        <div class="max-w-[1140px] w-full flex flex-wrap items-center min-h-[549px]">
      
          <!-- Columna Izquierda (33%) con imagen -->
          <div class="w-full md:w-1/3 p-5 flex items-center justify-center">
            <picture>
              <!-- Fuente para navegadores que soportan WebP -->
              <source 
                  type="image/webp" 
                  srcset="
                      {{ asset('img/procesadas/junta-de-expansion-conica-con-bridas-metalicas-1-1-small.webp') }} 480w,
                      {{ asset('img/procesadas/junta-de-expansion-conica-con-bridas-metalicas-1-1-medium.webp') }} 800w,
                      {{ asset('img/procesadas/junta-de-expansion-conica-con-bridas-metalicas-1-1-large.webp') }} 1200w"
                  sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
              
              <!-- Fuente de respaldo para navegadores que no soportan WebP -->
              <source 
                  type="image/jpeg" 
                  srcset="
                      {{ asset('img/procesadas/junta-de-expansion-conica-con-bridas-metalicas-1-1-small.jpg') }} 480w,
                      {{ asset('img/procesadas/junta-de-expansion-conica-con-bridas-metalicas-1-1-medium.jpg') }} 800w,
                      {{ asset('img/procesadas/junta-de-expansion-conica-con-bridas-metalicas-1-1-large.jpg') }} 1200w"
                  sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
              
              <!-- Etiqueta img como último recurso -->
              <img 
                id="imagen_destacada_img"
                  src="{{ asset('img/procesadas/junta-de-expansion-conica-con-bridas-metalicas-1-1-large.jpg') }}" 
                  alt="Imagen Junta de expansión 111C" 
                  class="mx-auto w-[370px] transition-transform duration-300 ease-in-out hover:scale-110">
          </picture>
          </div>
      
          <!-- Columna Derecha (66%) -->
          <div class="w-full md:w-2/3 p-5 flex flex-col justify-center text-[#073e81] font-['Roboto',sans-serif]">
      
            <!-- Título -->
            <h2 class="text-[39px] font-bold leading-[1.4] mb-6">
              Junta de expansión Estilo 111C
            </h2>
      
            <!-- Texto descriptivo -->
            <div class="space-y-6 text-[#073e81] text-[15px]">
              <p>Junta cónica concéntrica de un solo arco fluido o estándar.</p>
              <p>Una solución práctica y económica para la conexión de tuberías de diferentes diámetros.</p>
              <p>Con Bridas de hule bajo ANSI B16.5 pero también disponible bajo pedido con bridas metálicas en acero y acero galvanizado ANSI/DIN.</p>
              <p>Proporcionan acoplamiento efectivo hasta para diámetros nominales hasta 60 pulgadas en todo el rango de materiales de fabricación; NBR, EPDM, PTFE, FKM, etc.</p>
            </div>
      
            <!-- Botón “COTIZAR AHORA” -->
            <div class="mt-6">
              <a href="#cotizar"
                 class="inline-block bg-[#5a0f0d] text-white font-black text-sm 
                        rounded-full px-8 py-3 border border-[#5a0f0d]
                        transition-all duration-300 hover:bg-white hover:text-[#5a0f0d]">
                COTIZAR AHORA
              </a>
            </div>
      
          </div>
        </div>
      </section>
      




      <section id="111e"
      class="overflow-hidden w-full 
             flex items-center justify-center 
             bg-white py-8 px-4">
    
      <!-- Contenedor “boxed” con ancho máximo -->
      <div class="max-w-[1140px] w-full flex flex-wrap items-center min-h-[549px]">
        
        <!-- Columna Izquierda (33%) con imagen -->
        <div class="w-full md:w-1/3 p-5 flex items-center justify-center">
          <picture>
            <!-- Fuente para navegadores que soportan WebP -->
            <source 
                type="image/webp" 
                srcset="
                    {{ asset('img/procesadas/junta-de-expansion-conica-excentrica-1-small.webp') }} 480w,
                    {{ asset('img/procesadas/junta-de-expansion-conica-excentrica-1-medium.webp') }} 800w,
                    {{ asset('img/procesadas/junta-de-expansion-conica-excentrica-1-large.webp') }} 1200w"
                sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
            
            <!-- Fuente de respaldo para navegadores que no soportan WebP -->
            <source 
                type="image/jpeg" 
                srcset="
                    {{ asset('img/procesadas/junta-de-expansion-conica-excentrica-1-small.jpg') }} 480w,
                    {{ asset('img/procesadas/junta-de-expansion-conica-excentrica-1-medium.jpg') }} 800w,
                    {{ asset('img/procesadas/junta-de-expansion-conica-excentrica-1-large.jpg') }} 1200w"
                sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
            
            <!-- Etiqueta img como último recurso -->
            <img 
              id="imagen_destacada_img"
                src="{{ asset('img/procesadas/junta-de-expansion-conica-excentrica-1-large.jpg') }}" 
                alt="Imagen Junta de expansión 111E" 
                class="mx-auto w-[370px] transition-transform duration-300 ease-in-out hover:scale-110">
        </picture>
        </div>
    
        <!-- Columna Derecha (66%) -->
        <div class="w-full md:w-2/3 p-5 flex flex-col justify-center text-[#073e81] font-['Roboto',sans-serif]">
    
          <!-- Título -->
          <h2 class="text-[39px] font-bold leading-[1.4] mb-6">
            Junta de expansión Estilo 111E
          </h2>
    
          <!-- Texto descriptivo -->
          <div class="space-y-6 text-[#073e81] text-[15px]">
            <p>
              Junta cónica de arco estándar o fluido para conexión de tuberías 
              de diámetro distinto y no concéntricos.
            </p>
            <p>
              Con Bridas de hule bajo ANSI B16.5 pero también disponible bajo 
              pedido con bridas metálicas en acero y acero galvanizado ANSI/DIN.
            </p>
            <p>
              Proporcionan acoplamiento efectivo hasta para diámetros nominales 
              hasta 60 pulgadas y tubos de hasta 22 pulgadas en todo el rango de 
              materiales de fabricación; NBR, EPDM, PTFE, FKM, etc.
            </p>
          </div>
    
          <!-- Botón “COTIZAR AHORA” -->
          <div class="mt-6">
            <a href="#cotizar"
               class="inline-block bg-[#5a0f0d] text-white font-black text-sm 
                      rounded-full px-8 py-3 border border-[#5a0f0d]
                      transition-all duration-300 
                      hover:bg-white hover:text-[#5a0f0d]">
              COTIZAR AHORA
            </a>
          </div>
    
        </div>
      </div>
    </section>
      




    <section id="1000"
  class="overflow-hidden w-full 
         flex items-center justify-center 
         bg-white py-8 px-4">

  <!-- Contenedor “boxed” con ancho máximo -->
  <div class="max-w-[1140px] w-full flex flex-wrap items-center min-h-[549px]">

    <!-- Columna Izquierda (33%) con imagen -->
    <div class="w-full md:w-1/3 p-5 flex items-center justify-center">
      <picture>
        <!-- Fuente para navegadores que soportan WebP -->
        <source 
            type="image/webp" 
            srcset="
                {{ asset('img/procesadas/junta-tipo-conector-recto-flexible-1-small.webp') }} 480w,
                {{ asset('img/procesadas/junta-tipo-conector-recto-flexible-1-medium.webp') }} 800w,
                {{ asset('img/procesadas/junta-tipo-conector-recto-flexible-1-large.webp') }} 1200w"
            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
        
        <!-- Fuente de respaldo para navegadores que no soportan WebP -->
        <source 
            type="image/jpeg" 
            srcset="
                {{ asset('img/procesadas/junta-tipo-conector-recto-flexible-1-small.jpg') }} 480w,
                {{ asset('img/procesadas/junta-tipo-conector-recto-flexible-1-medium.jpg') }} 800w,
                {{ asset('img/procesadas/junta-tipo-conector-recto-flexible-1-large.jpg') }} 1200w"
            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
        
        <!-- Etiqueta img como último recurso -->
        <img 
          id="imagen_destacada_img"
            src="{{ asset('img/procesadas/junta-tipo-conector-recto-flexible-1-large.jpg') }}" 
            alt="Imagen Junta de expansión 1000" 
            class="mx-auto w-[370px] transition-transform duration-300 ease-in-out hover:scale-110">
    </picture>
    </div>

    <!-- Columna Derecha (66%) -->
    <div class="w-full md:w-2/3 p-5 flex flex-col justify-center text-[#073e81] font-['Roboto',sans-serif]">

      <!-- Título -->
      <h2 class="text-[39px] font-bold leading-[1.4] mb-6">
        Estilo 1000
      </h2>

      <!-- Texto descriptivo -->
      <div class="space-y-6 text-[#073e81] text-[15px] leading-[1.2]">
        <p>Conector recto flexible.</p>
        <p>Diseñados para absorber el ruido, compensar la expansión y contracción térmica y golpes de ariete en instalaciones industriales y HVAC.</p>
        <p>Bridas de cara continua que no requieren sellos hidráulicos;</p>
        <p>-ASME B16.5/B16.47 Clase 125/150 Serie A</p>
        <p>– ASME B16.5/B16.47 Clase 250/300 Serie A</p>
        <p>-EN 1092-1 PN10</p>
        <p>-EN 1092-1 PN16</p>
        <p>Disponibles en todo el rango de materiales para diámetros nominales de hasta 24 pulgadas.</p>
      </div>

      <!-- Botón “COTIZAR AHORA” -->
      <div class="mt-6">
        <a href="#cotizar"
           class="inline-block bg-[#5a0f0d] text-white font-black text-sm 
                  rounded-full px-8 py-3 border border-[#5a0f0d]
                  transition-all duration-300 
                  hover:bg-white hover:text-[#5a0f0d]">
          COTIZAR AHORA
        </a>
      </div>

    </div>
  </div>
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
         <div id="cotizar" class="w-[800px]">
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
