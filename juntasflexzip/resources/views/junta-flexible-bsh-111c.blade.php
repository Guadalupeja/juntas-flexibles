@extends('layouts.app')

@section('title', 'Conoce el Modelo 111C Junta de expansión | BSH')
@section('description', 'Selecciona y cotiza todo el rango de materiales y dimensiones modelo 111C Junta de Expansión, 
Fabricación Express Juntas Bridadas.Todos los materiales y normas')


@section('structured-data')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Product",
  "name": "Junta Flexible Modelo 111C",
  "description": "Junta de expansión cónica concéntrica ideal para conectar sistemas de tubería de diferentes diámetros. Diseño de reborde sin necesidad de empaques adicionales. Resistente a vibraciones, movimientos y cambios de temperatura.",
  "sku": "111C-BSH",
  "mpn": "111C-2024",
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
    "https://juntasflexibles.com/img/procesadas/111C-mosaico-ok-small.webp",
    "https://juntasflexibles.com/img/procesadas/111C-mosaico-ok-medium.webp",
    "https://juntasflexibles.com/img/procesadas/111C-mosaico-ok-large.webp"
  ],
  "offers": {
    "@type": "Offer",
    "url": "https://juntasflexibles.com/producto/juntas-de-expansion-111C",
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
              <h2 class="text-2xl font-bold text-primaryBlue">Modelo Seleccionado: Junta de expansión Estilo <span id="parrafo_modelo">111C</span></h2>
          </div>
          <div class="grid md:grid-cols-[1fr_2fr_1fr] gap-2 items-center">
            <section class="text-center">
              <picture>
                <!-- Fuente para navegadores que soportan WebP -->
                <source 
                    type="image/webp" 
                    srcset="
                        {{ asset('img/procesadas/111C-mosaico-ok-small.webp') }} 480w,
                        {{ asset('img/procesadas/111C-mosaico-ok-medium.webp') }} 800w,
                        {{ asset('img/procesadas/111C-mosaico-ok-large.webp') }} 1200w"
                    sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                
                <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                <source 
                    type="image/jpeg" 
                    srcset="
                        {{ asset('img/procesadas/111C-mosaico-ok-small.jpg') }} 480w,
                        {{ asset('img/procesadas/111C-mosaico-ok-medium.jpg') }} 800w,
                        {{ asset('img/procesadas/111C-mosaico-ok-large.jpg') }} 1200w"
                    sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                
                <!-- Etiqueta img como último recurso -->
                <img 
                  id="imagen_destacada_img"
                    src="{{ asset('img/procesadas/111C-mosaico-ok-large.jpg') }}" 
                    alt="Imagen Junta de expansión 111C" 
                    class="mx-auto w-[300px] transition-transform duration-300 ease-in-out hover:scale-110">
            </picture>
          </section>
          
              <section class="text-justify">
                  <p id="descripcion_parrafo" class="mb-4 text-[13px]">
                    JUNTA CÓNICA CONCÉNTRICA En donde existe la necesidad de conectar sistemas de tubería de: DIFERENTES DIÁMETROS, MISMO EJE Diseño Integral de reborde o cara realzada, (No requieren empaques adicionales) Arco estándar diseñado para compensar movimientos, absorber vibración / ruido del sistema en el espacio más corto Excepcional capacidad de movimiento direccional. Excelente resistencia química y abrasión en los Hules Especificados Capacidad de vacío completo (30 "Hg) en todos los tamaños. 
                    Menor rigidez y fuerza de deflexión, fácil de instalar, ligero y de alta resistencia.
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
                        alt="Imagen diagrama Junta de expansión 111c" 
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
                          {{ asset('img/procesadas/Modelo-02-small.webp') }} 480w,
                          {{ asset('img/procesadas/Modelo-02-medium.webp') }} 800w,
                          {{ asset('img/procesadas/Modelo-02-large.webp') }} 1200w"
                      sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                  
                  <!-- Fuente de respaldo para navegadores que no soportan WebP -->
                  <source 
                      type="image/jpeg" 
                      srcset="
                          {{ asset('img/procesadas/Modelo-02-small.jpg') }} 480w,
                          {{ asset('img/procesadas/Modelo-02-medium.jpg') }} 800w,
                          {{ asset('img/procesadas/Modelo-02-large.jpg') }} 1200w"
                      sizes="(max-width: 480px) 480px, (max-width: 800px) 800px, 1200px">
                  
                  <!-- Etiqueta img como último recurso -->
                  <img 
                    id="imagen_2d_img"
                      src="{{ asset('img/procesadas/Modelo-02-large.jpg') }}" 
                      alt="Imagen arco junta expansión 111C" 
                      class="mx-auto w-[300px] transition-transform duration-300 ease-in-out hover:scale-110"
                      loading="lazy">
              </picture>
            </section>
            
          </div>
          <section class="my-8">
              <h2 class="text-xl font-semibold text-primaryBlue text-center mb-4">
                  Movimientos de la Junta de expansión modelo: 111C
              </h2>
              <div id="movimientos" class="grid grid-cols-2 sm:grid-cols-3 gap-4">
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
                            alt="FJ6 Movimiento de instalación Juntas de Expansión_Torsional" 
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
      
      <!-- Primer bloque de filas -->
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
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">1</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
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
          <td class="border border-[#dddddd] p-2 text-left">8</td>
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
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
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
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">1.5</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">2</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">2.5</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
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
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">3</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
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
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">3.5</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">4</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
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
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
      </tbody>

      <!-- Segundo encabezado (otra sección) -->
      <thead>
        <tr class="mt-20 lg:mt-0 bg-primaryBlue text-white">
          <th class="border border-[#dddddd] p-2 text-left font-bold">SELECCIÓN DE MEDIDA</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø MAYOR in</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø MENOR in</th>
          <th class="border border-[#dddddd] p-2 text-left font-bold">ø LARGO in</th>
        </tr>
      </thead>

      <!-- Segundo bloque de filas -->
      <tbody>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">5</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">6</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left box-border">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
          <td class="border border-[#dddddd] p-2 text-left">12</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">8</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
          <td class="border border-[#dddddd] p-2 text-left">16</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">10</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">30</td>
          <td class="border border-[#dddddd] p-2 text-left">20</td>
          <td class="border border-[#dddddd] p-2 text-left">18</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">30</td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">26</td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">36</td>
          <td class="border border-[#dddddd] p-2 text-left">30</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">42</td>
          <td class="border border-[#dddddd] p-2 text-left">30</td>
          <td class="border border-[#dddddd] p-2 text-left">24</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">42</td>
          <td class="border border-[#dddddd] p-2 text-left">36</td>
          <td class="border border-[#dddddd] p-2 text-left">13</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">48</td>
          <td class="border border-[#dddddd] p-2 text-left">42</td>
          <td class="border border-[#dddddd] p-2 text-left">14</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">54</td>
          <td class="border border-[#dddddd] p-2 text-left">42</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">54</td>
          <td class="border border-[#dddddd] p-2 text-left">48</td>
          <td class="border border-[#dddddd] p-2 text-left">13</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">60</td>
          <td class="border border-[#dddddd] p-2 text-left">48</td>
          <td class="border border-[#dddddd] p-2 text-left">22</td>
        </tr>
        <tr>
          <td class="border border-[#dddddd] p-2 text-left">
            <input type="radio" name="seleccion_medida" class="input-text fila-radio" />
          </td>
          <td class="border border-[#dddddd] p-2 text-left">60</td>
          <td class="border border-[#dddddd] p-2 text-left">54</td>
          <td class="border border-[#dddddd] p-2 text-left">13</td>
        </tr>
      </tbody>
    </table>
  </div>



<!-- Resumen de Selección -->
<h2 class="text-xl font-semibold text-primaryBlue text-center my-4">
  Resumen de selección de la junta de expansión:
</h2>
<div id="seleccion-resultado" class="bg-gray-100 p-4 rounded shadow-md md:flex">
  <h3 class="text-lg font-bold md:w-1/2">Modelo: 111C</h3>

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