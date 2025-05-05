@extends('layouts.app')

@section('title', 'Gracias - Juntas de Expansión Fabricación nacional | BSH')
@section('description', '¡Muchas gracias! En breve uno de nuestros especialistas lo contactará para ayudarlo en lo que requiere. Llamar a un agente Hablar por WhatsApp')





@section('contenido')






<!-- Sección principal, ahora con algo de padding para móviles -->
<section class="w-full min-h-[400px] flex items-center justify-center bg-white px-4 py-4">

    <!-- Contenedor interior con ancho máximo 1140px -->
    <div class="w-full max-w-[1140px] mx-auto flex flex-col space-y-5 md:space-y-[20px]">
  
      <!-- Texto principal centrado -->
      <div class="text-center px-2">
        <!-- Cambiamos el tamaño de fuente para móviles y escritorio -->
        <div class="text-[#0C0145] font-['Roboto_Condensed']
                    text-xl md:text-[39px] font-black
                    leading-[1]">
          ¡Muchas gracias! En breve uno de nuestros especialistas lo contactará
          para ayudarlo en lo que requiere.
        </div>
      </div>
  
      <!-- Sección interna con 2 columnas -->
      <!-- Con flex-wrap y md:flex-row, las columnas se apilan en móvil y se alinean en fila en escritorio -->
      <div class="flex flex-col md:flex-row flex-wrap">
  
        <!-- Columna 1: botón “Llamar a un agente” -->
        <!-- Centramos el contenido en móvil con text-center, y en escritorio a la derecha con md:text-right -->
        <div class="w-full md:w-1/2 p-2 md:p-[10px] text-center md:text-right">
          <a
            href="tel://55%20575%2021715"
            target="_blank"
            class="inline-block bg-[#5a0f0d] text-white text-sm md:text-[15px] font-black leading-[1]
                   px-6 md:px-[30px] py-3 md:py-[14px] rounded-full border border-[#5a0f0d]
                   transition-all duration-300 hover:bg-white hover:text-[#5a0f0d]"
          >
            Llamar a un agente
          </a>
        </div>
  
        <!-- Columna 2: botón “Hablar por WhatsApp” -->
        <!-- Similar enfoque: en móvil text-center, en escritorio a la izquierda con md:text-left -->
        <div class="w-full md:w-1/2 p-2 md:p-[10px] text-center md:text-left">
          <a
            href="https://api.whatsapp.com/send?phone=5218332395885&text=Hola%20me%20gustar%C3%ADa%20m%C3%A1s%20informaci%C3%B3n%20acerca%20de%20"
            target="_blank"
            rel="noopener"
            class="inline-block bg-[#15AE00] text-white text-sm md:text-[15px] font-black leading-[1]
                   px-6 md:px-[30px] py-3 md:py-[14px] rounded-full border border-[#15AE00]
                   transition-all duration-300 hover:bg-white hover:text-[#15AE00]"
          >
            <!-- Contenido con ícono y texto -->
            <span class="flex items-center justify-center">
              <i class="fab fa-whatsapp mr-2"></i>
              Hablar por WhatsApp
            </span>
          </a>
        </div>
  
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
