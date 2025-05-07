@extends('layouts.app')

@section('title', 'Conoce el Modelo 111E Junta de expansión | BSH')
@section('description', 'Selecciona y cotiza todo el rango de materiales y dimensiones modelo 111E Junta de Expansión, 
Fabricación Express Juntas Bridadas.Todos los materiales y normas')


@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Junta Flexible Modelo 111E",
  "description": "Junta de expansión cónica excéntrica ideal para conectar sistemas de tubería de diferentes diámetros y ejes. Excepcional resistencia química y a la abrasión, diseño de reborde sin necesidad de empaques adicionales. Resistente a vibraciones y movimientos.",
  "sku": "111E-BSH",
  "mpn": "111E-2024",
  "brand": {
    "@type": "Brand",
    "name": "BSH"
  },
  "manufacturer": {
    "@type": "Organization",
    "name": "BSH - Bombas Sellos y Hules Industriales S.A. de C.V.",
    "logo": "https://juntasflexibles.com/img/logos/logo-bsh.webp"
  },
  "material": "Hule resistente a químicos y abrasión",
  "category": "Juntas de Expansión",
  "image": [
    "https://juntasflexibles.com/img/procesadas/111e-mosaico-ok-small.webp",
    "https://juntasflexibles.com/img/procesadas/111e-mosaico-ok-medium.webp",
    "https://juntasflexibles.com/img/procesadas/111e-mosaico-ok-large.webp"
  ],
  "offers": {
    "@type": "Offer",
    "url": "https://juntasflexibles.com/producto/juntas-de-expansion-111E",
    "priceCurrency": "MXN",
    "availability": "https://schema.org/InStock",
    "priceValidUntil": "2025-12-31",
    "seller": {
      "@type": "Organization",
      "name": "BSH"
    }
  },
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "57"
  },
  "review": [
    {
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "Juan Pérez"
      },
      "datePublished": "2024-09-15",
      "reviewBody": "Excelente calidad y gran resistencia a la vibración. Cumple perfectamente con las especificaciones industriales.",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "5"
      }
    },
    {
      "@type": "Review",
      "author": {
        "@type": "Person",
        "name": "María López"
      },
      "datePublished": "2024-10-05",
      "reviewBody": "Muy buen material y fácil de instalar. Se ajusta perfectamente a las tuberías sin necesidad de empaques extra.",
      "reviewRating": {
        "@type": "Rating",
        "ratingValue": "4.5"
      }
    }
  ]
}
</script>
@endsection



@section('contenido')



<div id="content" class="bg-white text-gray-700 leading-relaxed font-roboto">
  <div class="max-w-screen-xl mx-auto px-4">
      <main>
          <div class="text-center my-5">
              <h2 class="text-2xl font-bold text-primaryBlue">Modelo Seleccionado: Junta de expansión Estilo <span id="parrafo_modelo">111E</span></h2>
          </div>
          <div class="grid md:grid-cols-[1fr_2fr_1fr] gap-2 items-center">
            <section class="text-center">
              <picture>
                <!-- Fuente para navegadores que soportan WebP -->
                <source 
                    type="image/webp" 
                    srcset="
                        {{ asset('img/procesadas/111e-mosaico-ok-small.webp') }} 480w,
                        {{ asset('img/procesadas/111e-mosaico-ok-medium.webp') }} 800w,
                        {{ asset('img/procesadas/111e-mosaico-ok-large.webp') }} 1200w"
                    sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                
                <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                <source 
                    type="image/jpeg" 
                    srcset="
                        {{ asset('img/procesadas/111e-mosaico-ok-small.jpg') }} 480w,
                        {{ asset('img/procesadas/111e-mosaico-ok-medium.jpg') }} 800w,
                        {{ asset('img/procesadas/111e-mosaico-ok-large.jpg') }} 1200w"
                    sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                
                <!-- Etiqueta img como último recurso -->
                <img 
                  id="imagen_destacada_img"
                    src="{{ asset('img/procesadas/111e-mosaico-ok-large.jpg') }}" 
                    alt="Imagen Junta de expansión 111E" 
                    class="mx-auto w-[300px] transition-transform duration-300 ease-in-out hover:scale-110">
            </picture>
          </section>
          
              <section class="text-justify">
                  <p id="descripcion_parrafo" class="mb-4 text-[13px]">
                    CONICA EXCENTRICA: En donde existe la necesidad de conectar sistemas de tubería de: DIFERENTES DIÁMETROS, DIFERENTES EJES. Excepcional capacidad de movimiento direccional. Excelente resistencia química y abrasión en los Hules Especificados Capacidad de vacío completo (30 "Hg) en todos los tamaños, construcción económica terminado exterior Venda de ALTA CALIDAD Compensa la desalineación menor y compensación de tuberías Menor rigidez y fuerza de deflexión Fácil de instalar, 
                    ligero y de alta resistencia Proporciona un fácil acceso a las tuberías y equipos
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
                        alt="Imagen diagrama Junta de expansión 111E" 
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
                          {{ asset('img/procesadas/Modelo-03-small.webp') }} 480w,
                          {{ asset('img/procesadas/Modelo-03-medium.webp') }} 800w,
                          {{ asset('img/procesadas/Modelo-03-large.webp') }} 1200w"
                      sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                  
                  <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                  <source 
                      type="image/jpeg" 
                      srcset="
                          {{ asset('img/procesadas/Modelo-03-small.jpg') }} 480w,
                          {{ asset('img/procesadas/Modelo-03-medium.jpg') }} 800w,
                          {{ asset('img/procesadas/Modelo-03-large.jpg') }} 1200w"
                      sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                  
                  <!-- Etiqueta img como último recurso -->
                  <img 
                    id="imagen_2d_img"
                      src="{{ asset('img/procesadas/Modelo-03-large.jpg') }}" 
                      alt="Imagen arco junta expansión 111E" 
                      class="mx-auto w-[300px] transition-transform duration-300 ease-in-out hover:scale-110"
                      loading="lazy">
              </picture>
            </section>
            
          </div>
          <section class="my-8">
              <h2 class="text-xl font-semibold text-primaryBlue text-center mb-4">
                  Movimientos de la Junta de expansión modelo: 111E
              </h2>
              <div id="movimientos" class="grid grid-cols-2 sm:grid-cols-3 gap-4">

            
                <div class="flex justify-center items-center">
                    <picture>
                        <!-- Fuente para navegadores que soportan WebP -->
                        <source 
                            type="image/webp" 
                            srcset="
                                {{ asset('img/procesadas/FJ2-Elongacion-Axial-small.webp') }} 480w,
                                {{ asset('img/procesadas/FJ2-Elongacion-Axial-medium.webp') }} 800w,
                                {{ asset('img/procesadas/FJ2-Elongacion-Axial-large.webp') }} 1200w"
                            sizes="(max-width: 480px) 120px, (max-width: 800px) 120px, 120px">
                        
                        <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                        <source 
                            type="image/jpeg" 
                            srcset="
                                {{ asset('img/procesadas/FJ2-Elongacion-Axial-small.jpg') }} 480w,
                                {{ asset('img/procesadas/FJ2-Elongacion-Axial-medium.jpg') }} 800w,
                                {{ asset('img/procesadas/FJ2-Elongacion-Axial-large.jpg') }} 1200w"
                            sizes="(max-width: 480px) 120px, (max-width: 800px) 120px, 120px">
                        
                        <!-- Etiqueta img como último recurso -->
                        <img 
                            src="{{ asset('img/procesadas/FJ2-Elongacion-Axial-large.jpg') }}" 
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
                                {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-small.webp') }} 480w,
                                {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-medium.webp') }} 800w,
                                {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-large.webp') }} 1200w"
                            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                        
                        <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                        <source 
                            type="image/jpeg" 
                            srcset="
                                {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-small.jpg') }} 480w,
                                {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-medium.jpg') }} 800w,
                                {{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-large.jpg') }} 1200w"
                            sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                        
                        <!-- Etiqueta img como último recurso -->
                        <img 
                            src="{{ asset('img/procesadas/FJ3-Movimiento-lateral-o-Transversal-large.jpg') }}" 
                            alt="FJ6 Movimiento de instalación Juntas de Expansión_Torsional" 
                            class="rounded-full w-[120px] transition-transform duration-300 ease-in-out hover:scale-110">
                    </picture>
                </div>


                <div class="flex justify-center items-center">
                  <picture>
                      <!-- Fuente para navegadores que soportan WebP -->
                      <source 
                          type="image/webp" 
                          srcset="
                              {{ asset('img/procesadas/FJ5-Vibracion-small.webp') }} 480w,
                              {{ asset('img/procesadas/FJ5-Vibracion-medium.webp') }} 800w,
                              {{ asset('img/procesadas/FJ5-Vibracion-large.webp') }} 1200w"
                          sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                      
                      <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                      <source 
                          type="image/jpeg" 
                          srcset="
                              {{ asset('img/procesadas/FJ5-Vibracion-small.jpg') }} 480w,
                              {{ asset('img/procesadas/FJ5-Vibracion-medium.jpg') }} 800w,
                              {{ asset('img/procesadas/FJ5-Vibracion-large.jpg') }} 1200w"
                          sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                      
                      <!-- Etiqueta img como último recurso -->
                      <img 
                          src="{{ asset('img/procesadas/FJ5-Vibracion-large.jpg') }}" 
                          alt="FJ1 Movimiento de instalación de Juntas de Expansión_Comprension Axial" 
                          class="rounded-full w-[120px] transition-transform duration-300 ease-in-out hover:scale-110">
                  </picture>
              </div>



            </div>


            <div  class="tabla-seleccion overflow-x-auto max-w-full mt-8">
            <h1 class="text-xl font-semibold text-primaryBlue text-center my-5">
              Selecciona las dimensiones de la Junta flexible que requieres:
          </h1>
            


  <!-- Contenedor que replica style-2 (overflow, margins, 2 columnas en pantallas grandes) -->
  <div class="overflow-x-auto max-w-full mr-[40px] mt-[30px] lg:columns-2 box-border">
    <!-- Tabla principal -->
    <table class="tabla-medidas w-full border-separate border-spacing-0 border border-[#dddddd] mb-6 box-border">
      <!-- Primer encabezado de la tabla -->
      <thead>
        <tr class="bg-primaryBlue text-white">
          <th class="border border-[#dddddd] p-2 text-left font-bold">SELECCIÓN DE MEDIDA</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø MAYOR in</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø MENOR in</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø LARGO in</th>
        </tr>
      </thead>
      
      <!-- Primer bloque de filas (1 a 30) -->
      <tbody>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="fila-radio input-text" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">1.5</td>
          <td class="border border-[#dddddd] p-2 text-left">1</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">1</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">1.25</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">1.5</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">1</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">1.25</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">1.5</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">1</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">1.25</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">1.5</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">1.5</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">11</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">4.5</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">11</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">15</td>
        </tr>
      </tbody>
    
      <!-- Segundo encabezado (otra sección) -->
      <thead>
        <tr class="bg-primaryBlue text-white">
          <th class="border border-[#dddddd] p-2 text-left font-bold">SELECCIÓN DE MEDIDA</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø MAYOR in</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø MENOR in</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø LARGO in</th>
        </tr>
      </thead>
      
      <!-- Segundo bloque de filas (a partir de la fila 31) -->
      <tbody>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">15</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">15</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">15</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">21</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">15</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">9</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">28</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">30</td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">34</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">30</td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">36</td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">40</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">36</td>
          <td class="border border-[#dddddd] p-2 text-left">30</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">42</td>
          <td class="border border-[#dddddd] p-2 text-left">30</td>
          <td class="border border-[#dddddd] p-2 text-left">40</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">42</td>
          <td class="border border-[#dddddd] p-2 text-left">36</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">48</td>
          <td class="border border-[#dddddd] p-2 text-left">42</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">54</td>
          <td class="border border-[#dddddd] p-2 text-left">42</td>
          <td class="border border-[#dddddd] p-2 text-left">40</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">54</td>
          <td class="border border-[#dddddd] p-2 text-left">48</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">60</td>
          <td class="border border-[#dddddd] p-2 text-left">48</td>
          <td class="border border-[#dddddd] p-2 text-left">40</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">60</td>
          <td class="border border-[#dddddd] p-2 text-left">54</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
      </tbody>
    </table>
    
  </div>



<!-- Resumen de Selección -->
<h2 class="text-xl font-semibold text-primaryBlue text-center my-4">
  Resumen de selección de la junta de expansión:
</h2>
<div id="seleccion-resultado" class="bg-gray-100 p-4 rounded shadow-md md:flex">
  <h3 class="text-lg font-bold md:w-1/2">Modelo: 111E</h3>

  <section class="md:w-1/2 mt-4 flex items-center space-x-2">
    <h3 class="text-lg font-bold">Medidas:</h3>
    <ul id="productos-seleccionados2" class="flex space-x-3 list-none">
        <!-- Aquí se mostrarán el DIÁMETRO NOMINAL y LONGITUD -->
    </ul>
</section>

</div>




@if($errors->any())
  <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
    <ul>
      @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
      @endforeach
    </ul>
  </div>
@endif




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
        

        </div>
      </div>





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