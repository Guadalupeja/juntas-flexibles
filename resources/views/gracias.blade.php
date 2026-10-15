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
              <svg class="inline-block w-4 h-4 mr-2 align-[-2px]" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
    <path d="M12.04 2a9.84 9.84 0 0 0-8.42 14.93L2 22l5.22-1.57A9.96 9.96 0 1 0 12.04 2Zm0 17.98a8 8 0 0 1-4.08-1.12l-.29-.17-3.1.93.96-3.02-.19-.31a7.9 7.9 0 1 1 6.7 3.69Zm4.34-5.92c-.24-.12-1.4-.69-1.62-.77-.22-.08-.38-.12-.54.12-.16.24-.62.77-.76.93-.14.16-.28.18-.52.06-.24-.12-1-.37-1.9-1.18-.7-.63-1.18-1.4-1.32-1.64-.14-.24-.01-.37.1-.49.11-.11.24-.28.36-.42.12-.14.16-.24.24-.4.08-.16.04-.3-.02-.42-.06-.12-.54-1.3-.74-1.78-.2-.47-.4-.4-.54-.41h-.46c-.16 0-.42.06-.64.3-.22.24-.84.82-.84 2 0 1.18.86 2.32.98 2.48.12.16 1.69 2.58 4.1 3.62.57.25 1.02.4 1.37.51.58.18 1.1.16 1.51.1.46-.07 1.4-.57 1.6-1.12.2-.55.2-1.02.14-1.12-.06-.1-.22-.16-.46-.28Z"/>
</svg>
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
