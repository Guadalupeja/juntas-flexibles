@extends('layouts.app')

@section('title', 'Conoce el Modelo 1110 Junta Flexible | BSH')
@section('description', 'Selecciona y cotiza todo el rango de materiales y dimensiones modelo 1110 Junta Flexible, 
Fabricación Express Juntas Bridadas. Todos los materiales y normas')


@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Juntas de Expansión para Conexión de Tubería",
  "description": "Juntas de expansión de hules convencionales y especiales para cualquier industria. Cotiza aquí. Fabricamos sobre especificación o diseño con la mejor calidad.",
  "image": [
    "https://juntasflexibles.com/img/procesadas/Junta-de-expansion-bsh-mexico-small.webp",
    "https://juntasflexibles.com/img/procesadas/Junta-de-expansion-bsh-mexico-medium.webp",
    "https://juntasflexibles.com/img/procesadas/Junta-de-expansion-bsh-mexico-large.webp"
  ],
  "brand": {
    "@type": "Brand",
    "name": "BSH"
  },
  "model": "1110",
  "category": "Juntas de Expansión",
  "offers": {
    "@type": "Offer",
    "url": "https://juntasflexibles.com/producto/juntas-de-expansion-1110",  // Reemplaza con la URL específica del producto
    "priceCurrency": "MXN",
    "priceValidUntil": "2025-12-31",
    "availability": "https://schema.org/InStock",
    "seller": {
      "@type": "Organization",
      "name": "BSH"
    }
  }
}
</script>
@endsection



@section('contenido')



<div id="content" class="bg-white text-gray-700 leading-relaxed font-roboto">
  <div class="max-w-screen-xl mx-auto px-4">
      <main>
          <div class="text-center my-5">
              <h2 class="text-2xl font-bold text-primaryBlue">Modelo Seleccionado: Junta de espansión Estilo <span id="parrafo_modelo">1110</span></h2>
          </div>
          <div class="grid md:grid-cols-[1fr_2fr_1fr] gap-2 items-center">
            <section class="text-center">
              <picture>
                <!-- Fuente para navegadores que soportan WebP -->
                <source 
                    type="image/webp" 
                    srcset="
                        {{ asset('img/procesadas/1110-mosaico-ok-small.webp') }} 480w,
                        {{ asset('img/procesadas/1110-mosaico-ok-medium.webp') }} 800w,
                        {{ asset('img/procesadas/1110-mosaico-ok-large.webp') }} 1200w"
                    sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                
                <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                <source 
                    type="image/jpeg" 
                    srcset="
                        {{ asset('img/procesadas/1110-mosaico-ok-small.jpg') }} 480w,
                        {{ asset('img/procesadas/1110-mosaico-ok-medium.jpg') }} 800w,
                        {{ asset('img/procesadas/1110-mosaico-ok-large.jpg') }} 1200w"
                    sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                
                <!-- Etiqueta img como último recurso -->
                <img 
                  id="imagen_destacada_img"
                    src="{{ asset('img/procesadas/1110-mosaico-ok-large.jpg') }}" 
                    alt="Imagen Destacada" 
                    class="mx-auto w-[300px] transition-transform duration-300 ease-in-out hover:scale-110">
            </picture>
          </section>
          
              <section class="text-justify">
                  <p id="descripcion_parrafo" class="mb-4 text-[13px]">
                      La Junta de Expansión Modelo 1110 arco estándar es la más común, el arco estándar está diseñado para compensar movimientos, absorber vibración / ruido del sistema en el espacio más corto. Compensar la desalineación / desplazamiento protegiendo a los equipos mecánicos contra fuerzas adicionales de puesta en marcha o golpe de ariete. Las juntas de expansión 1110 están disponibles en arco estándar, fluido y arco relleno. Diseño integral de las bridas (no requiere empaques).
                  </p>
                  <picture>
                    <!-- Fuente para navegadores que soportan WebP -->
                    <source 
                        type="image/webp" 
                        srcset="
                            {{ asset('img/procesadas/diagrama-arco-1-small.webp') }} 480w,
                            {{ asset('img/procesadas/diagrama-arco-1-medium.webp') }} 800w,
                            {{ asset('img/procesadas/diagrama-arco-1-large.webp') }} 1200w"
                        sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                    
                    <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                    <source 
                        type="image/jpeg" 
                        srcset="
                            {{ asset('img/procesadas/diagrama-arco-1-small.jpg') }} 480w,
                            {{ asset('img/procesadas/diagrama-arco-1-medium.jpg') }} 800w,
                            {{ asset('img/procesadas/diagrama-arco-1-large.jpg') }} 1200w"
                        sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                    
                    <!-- Etiqueta img como último recurso -->
                    <img 
                         id="imagen_diagrama_img"
                        src="{{ asset('img/procesadas/diagrama-arco-1-large.jpg') }}" 
                        alt="Imagen diagrama" 
                        class="w-full max-w-[536px] mx-auto h-[90px] transition-transform duration-300 ease-in-out hover:scale-110"
                        loading="lazy">
                </picture>
              
              </section>
              <section>
                <picture>
                  <!-- Fuente para navegadores que soportan WebP -->
                  <source 
                      type="image/webp" 
                      srcset="
                          {{ asset('img/procesadas/Mod-01-small.webp') }} 480w,
                          {{ asset('img/procesadas/Mod-01-medium.webp') }} 800w,
                          {{ asset('img/procesadas/Mod-01-large.webp') }} 1200w"
                      sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                  
                  <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                  <source 
                      type="image/jpeg" 
                      srcset="
                          {{ asset('img/procesadas/Mod-01-small.jpg') }} 480w,
                          {{ asset('img/procesadas/Mod-01-medium.jpg') }} 800w,
                          {{ asset('img/procesadas/Mod-01-large.jpg') }} 1200w"
                      sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                  
                  <!-- Etiqueta img como último recurso -->
                  <img 
                    id="imagen_2d_img"
                      src="{{ asset('img/procesadas/Mod-01-large.jpg') }}" 
                      alt="Imagen Destacada" 
                      class="mx-auto w-[300px] transition-transform duration-300 ease-in-out hover:scale-110"
                      loading="lazy">
              </picture>
            </section>
            
          </div>
          <section class="my-8">
              <h2 class="text-xl font-semibold text-primaryBlue text-center mb-4">
                  Movimientos de la Junta de expansión modelo: 1110
              </h2>
              <div id="movimientos" class="grid grid-cols-2 sm:grid-cols-4 gap-4">
                <div class="flex justify-center items-center">
                  <picture>
                    <!-- Fuente para navegadores que soportan WebP -->
                    <source 
                        type="image/webp" 
                        srcset="
                            {{ asset('img/procesadas/FJ1-Comprension-Axial-small.webp') }} 480w,
                            {{ asset('img/procesadas/FJ1-Comprension-Axial-medium.webp') }} 800w,
                            {{ asset('img/procesadas/FJ1-Comprension-Axial-large.webp') }} 1200w"
                        sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                    
                    <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                    <source 
                        type="image/jpeg" 
                        srcset="
                            {{ asset('img/procesadas/FJ1-Comprension-Axial-small.jpg') }} 480w,
                            {{ asset('img/procesadas/FJ1-Comprension-Axial-medium.jpg') }} 800w,
                            {{ asset('img/procesadas/FJ1-Comprension-Axial-large.jpg') }} 1200w"
                        sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                    
                    <!-- Etiqueta img como último recurso -->
                    <img 
                        src="{{ asset('img/procesadas/FJ1-Comprension-Axial-large.jpg') }}" 
                        alt="FJ1 Movimiento de instalación de Juntas de Expansión_Comprension Axial" 
                        class="rounded-full w-[120px] transition-transform duration-300 ease-in-out hover:scale-110">
                </picture>
                </div>
                <div class="flex justify-center items-center">
                  <picture>
                    <!-- Fuente para navegadores que soportan WebP -->
                    <source 
                        type="image/webp" 
                        srcset="
                            {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-small.webp') }} 480w,
                            {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-medium.webp') }} 800w,
                            {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-large.webp') }} 1200w"
                        sizes="(max-width: 480px) 120px, (max-width: 800px) 120px, 120px">
                    
                    <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                    <source 
                        type="image/jpeg" 
                        srcset="
                            {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-small.jpg') }} 480w,
                            {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-medium.jpg') }} 800w,
                            {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-large.jpg') }} 1200w"
                        sizes="(max-width: 480px) 120px, (max-width: 800px) 120px, 120px">
                    
                    <!-- Etiqueta img como último recurso -->
                    <img 
                        src="{{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-large.jpg') }}" 
                        alt="FJ3 Movimiento de instalación Juntas de Expansión_Lateral o Transversal" 
                        class="rounded-full w-[120px] transition-transform duration-300 ease-in-out hover:scale-110" 
                        loading="lazy">
                </picture>
               </div>
                <div class="flex justify-center items-center">
                  <picture>
                    <!-- Fuente para navegadores que soportan WebP -->
                    <source 
                        type="image/webp" 
                        srcset="
                            {{ asset('img/procesadas/FJ4-Movimiento-Angular-small.webp') }} 480w,
                            {{ asset('img/procesadas/FJ4-Movimiento-Angular-medium.webp') }} 800w,
                            {{ asset('img/procesadas/FJ4-Movimiento-Angular-large.webp') }} 1200w"
                        sizes="(max-width: 480px) 120px, (max-width: 800px) 120px, 120px">
                    
                    <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                    <source 
                        type="image/jpeg" 
                        srcset="
                            {{ asset('img/procesadas/FJ4-Movimiento-Angular-small.jpg') }} 480w,
                            {{ asset('img/procesadas/FJ4-Movimiento-Angular-medium.jpg') }} 800w,
                            {{ asset('img/procesadas/FJ4-Movimiento-Angular-large.jpg') }} 1200w"
                        sizes="(max-width: 480px) 120px, (max-width: 800px) 120px, 120px">
                    
                    <!-- Etiqueta img como último recurso -->
                    <img 
                        src="{{ asset('img/procesadas/FJ4-Movimiento-Angular-large.jpg') }}" 
                        alt="FJ4 Movimiento de instalación Juntas de Expansión_Angular" 
                        class="rounded-full w-[120px] transition-transform duration-300 ease-in-out hover:scale-110">
                </picture>
                </div>
                <div class="flex justify-center items-center">
                  <picture>
                    <!-- Fuente para navegadores que soportan WebP -->
                    <source 
                        type="image/webp" 
                        srcset="
                            {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-small.webp') }} 480w,
                            {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-medium.webp') }} 800w,
                            {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-large.webp') }} 1200w"
                        sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                    
                    <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                    <source 
                        type="image/jpeg" 
                        srcset="
                            {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-small.jpg') }} 480w,
                            {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-medium.jpg') }} 800w,
                            {{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-large.jpg') }} 1200w"
                        sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                    
                    <!-- Etiqueta img como último recurso -->
                    <img 
                        src="{{ asset('img/procesadas/FJ6-El-movimiento-de-Torsional-large.jpg') }}" 
                        alt="FJ6 Movimiento de instalación Juntas de Expansión_Torsional" 
                        class="rounded-full w-[120px] transition-transform duration-300 ease-in-out hover:scale-110">
                </picture>
                </div>
            </div>


            <div class="tabla-seleccion overflow-x-auto max-w-full mt-8">
            <h1 class="text-xl font-semibold text-primaryBlue text-center my-10">
              Selecciona las dimensiones de la Junta flexible que requieres:
          </h1>
            



          <table class="tabla-medidas min-w-full border border-gray-300 text-[15px] font-robot">
            <thead>
                <tr class="bg-primaryBlue text-white">
                    <th class="border border-gray-300 px-4 py-2">SELECCIÓN DE MEDIDA</th>
                    <th class="border border-gray-300 px-4 py-2">ø NOMINAL DN in</th>
                    <th class="border border-gray-300 px-4 py-2">LONGITUD L.T. STD. in</th>
                    <th class="border border-gray-300 px-4 py-2">ø EXTERIOR D.E. in</th>
                    <th class="border border-gray-300 px-4 py-2">ø CENTRO DE BARRENOS D.C.B. in</th>
                    <th class="border border-gray-300 px-4 py-2">BARRENOS NO.</th>
                    <th class="border border-gray-300 px-4 py-2">BARRENOS DIAM in</th>
                    <th class="border border-gray-300 px-4 py-2">ANILLOS DE RETENCIÓN</th>
                    <th class="border border-gray-300 px-4 py-2">DIMENSIONES A in</th>
                    <th class="border border-gray-300 px-4 py-2">DIMENSIONES B in</th>
                    <th class="border border-gray-300 px-4 py-2">DIMENSIONES C in</th>
                    <th class="border border-gray-300 px-4 py-2">DIMENSIONES D in</th>
                    <th class="border border-gray-300 px-4 py-2">DIMENSIONES E in</th>
                </tr>
            </thead>
            <tbody>
                <!-- Fila 1 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">9/16</td>
                </tr>
                <!-- Fila 2 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">9/16</td>
                </tr>
                <!-- Fila 3 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">11/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">9/16</td>
                </tr>
                <!-- Fila 4 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">11/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                </tr>
                <!-- Fila 5 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">11/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                </tr>
                <!-- Fila 6 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">11/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                </tr>
                <!-- Fila 7 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">9</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                </tr>
                <!-- Fila 8 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                </tr>
                <!-- Fila 9 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">11</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">9 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                </tr>
                <!-- Fila 10 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">6</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">13 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">11 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">9 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">5/8</td>
                </tr>
                <!-- Fila 11 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">14 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">11/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                </tr>
                <!-- Fila 12 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">19</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">17</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">14 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">11/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                </tr>
                <!-- Fila 13 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">14</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">21</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">18 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">16 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                </tr>
                <!-- Fila 14 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">23 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">21 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">18 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                </tr>
                <!-- Fila 15 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">18</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">25</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">22 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">20 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">3/4</td>
                </tr>
                <!-- Fila 16 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">20</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">27 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">25</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">20</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">22 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">13/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                </tr>
                <!-- Fila 17 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">22</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">29 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">27 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">20</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">24 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">13/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                </tr>
                <!-- Fila 18 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">24</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">32</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">29 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">20</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">26 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">13/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                </tr>
                <!-- Fila 19 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">26</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">34 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">31 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">24</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">28 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 7/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                </tr>
                <!-- Fila 20 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">28</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">36 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">34</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">28</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">30 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 7/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                </tr>
                <!-- Fila 21 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">30</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">38 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">36</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">28</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">32 7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 7/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                </tr>
                <!-- Fila 22 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">32</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">41 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">38 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">28</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">35</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                </tr>
                <!-- Fila 23 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">34</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">43 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">40 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">32</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">37</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                </tr>
                <!-- Fila 24 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">36</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">46</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">42 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">32</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">39</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                </tr>
                <!-- Fila 25 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">38</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">48 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">45 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">32</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">41</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                </tr>
                <!-- Fila 26 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">40</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">10</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">50 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">47 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">36</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">43</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">7/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1</td>
                </tr>
                <!-- Fila 27 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">42</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">53</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">49 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">36</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">45 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                </tr>
                <!-- Fila 28 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">44</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">55 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">51 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">40</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">47 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                </tr>
                <!-- Fila 29 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">48</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">59 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">56</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">44</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">51 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                </tr>
                <!-- Fila 30 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">50</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">61 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">58 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">44</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">53 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/8</td>
                </tr>
                <!-- Fila 31 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">54</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">66 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">62 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">44</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">57 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/16</td>
                </tr>


                <!-- Fila 32 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">56</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">68 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">65</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">48</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">59 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/16</td>
                </tr>


                <!-- Fila 33 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">60</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">73</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">69 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">52</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">63 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/16</td>
                </tr>
                <!-- Fila 34 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">62</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">75 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">71 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">52</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">65 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/16</td>
                </tr>
                <!-- Fila 35 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">66</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">12</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">80</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">76</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">52</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">69 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/16</td>
                </tr>
                <!-- Fila 36 -->
                <tr class="hover:bg-gray-50">
                    <td class="border border-gray-300 px-4 py-2 text-center">
                        <input type="radio" name="seleccion_medida" class="fila-radio w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500">
                    </td>
                    <td class="border border-gray-300 px-4 py-2 text-center">72</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">21</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">86 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">82 1/2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">60</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">75 1/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 5/8</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">2 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">15/16</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/4</td>
                    <td class="border border-gray-300 px-4 py-2 text-center">1 3/16</td>
                </tr>
            </tbody>
        </table>
      </div>





<!-- Resumen de Selección -->
<h2 class="text-xl font-semibold text-primaryBlue text-center my-4">
  Resumen de selección de la junta de expansión:
</h2>
<div id="seleccion-resultado" class="bg-gray-100 p-4 rounded shadow-md md:flex">
  <h3 class="text-lg font-bold md:w-1/2">Modelo: 1110</h3>

  <section class="md:w-1/2 mt-4">
      <h3 class="text-lg font-bold">Medidas:</h3>
      <ul id="productos-seleccionados2" class="list-disc pl-5">
          <!-- Aquí se mostrarán el DIÁMETRO NOMINAL y LONGITUD -->
      </ul>
  </section>
</div>




<!-- Formulario para Enviar Datos -->
<form method="post" action="{{ url('/filtros-seleccion') }}" class="mt-6 form-seleccion">
  @csrf <!-- Laravel CSRF Protection -->
  <input type="hidden" name="boton_presionado" value="1">
  <input type="hidden" name="resultado" id="resultado" class="resultado">
  <input type="hidden" class="encabezados_tabla" name="encabezados_tabla" value="">


  <input type="hidden" name="modelo" id="modelo">
  <input type="hidden" name="descripcion" id="descripcion">

  <input type="hidden" name="imagen_2d" id="imagen_2d">
  <input type="hidden" name="imagen_diagrama" id="imagen_diagrama">
  <input type="hidden" name="imagen_destacada" id="imagen_destacada">
  
   <!-- Aquí se crearán dinámicamente los inputs de las imágenes -->
   <div id="imagenes_container"></div>
  
  <button id="botonIr" type="submit" class="mt-4 bg-primaryRed text-white px-4 py-2 rounded hover:bg-blue-700">
      Siguiente
  </button>
</form>

<!-- Script para pasar el texto del párrafo al input oculto -->
<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Párrafo y modelo
    var parrafo = document.getElementById('descripcion_parrafo');
    var inputParrafo = document.getElementById('descripcion');
  
    // Asumiendo que tienes un elemento #parrafo_modelo, si no, ajusta según corresponda
    var parrafo_modelo = document.getElementById('parrafo_modelo');
    var input_modeloParrafo = document.getElementById('modelo');
  
    inputParrafo.value = parrafo.textContent.trim();
    input_modeloParrafo.value = parrafo_modelo.textContent.trim();
  
    // Imagen Destacada, Diagrama, 2D
    var imgDestacada = document.getElementById('imagen_destacada_img');
    var imgDiagrama = document.getElementById('imagen_diagrama_img');
    var img2d = document.getElementById('imagen_2d_img');
  
    // Inputs ocultos
    var inputDestacada = document.getElementById('imagen_destacada');
    var inputDiagrama = document.getElementById('imagen_diagrama');
    var input2d = document.getElementById('imagen_2d');
  
    inputDestacada.value = imgDestacada.src;
    inputDiagrama.value = imgDiagrama.src;
    input2d.value = img2d.src;
  
    // Movimientos
    var movimientosContainer = document.getElementById('movimientos');
    var imagenes = movimientosContainer.querySelectorAll('img');
    var imagenesContainer = document.getElementById('imagenes_container');
  
    imagenes.forEach(function(img) {
      var input = document.createElement('input');
      input.type = 'hidden';
      input.name = 'imagenes[]';
      input.value = img.src;
      imagenesContainer.appendChild(input);
    });
  });







  </script>


          </section>

      </main>
  </div>
</div>




  


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