@php
    use Carbon\Carbon;

    $now = Carbon::now('America/Mexico_City');
    $dayOfWeek = $now->dayOfWeekIso;
    $hour = $now->hour;

    $showWidget = false;
    if ($dayOfWeek >= 1 && $dayOfWeek <= 5 && $hour >= 9 && $hour < 18) {
        $showWidget = true;
    }

    $userAgent = request()->header('User-Agent');
    $isMobile = preg_match('/Mobile|Android|iP(hone|od)|IEMobile|Windows Phone|BlackBerry/i', $userAgent);

    $telefono = '+528332395885';
    $mensaje  = urlencode('¡Hola BSH! Tengo una pregunta.');

    $whatsappUrl = $isMobile
        ? "https://wa.me/{$telefono}?text={$mensaje}"
        : "https://web.whatsapp.com/send?phone={$telefono}&text={$mensaje}";

    $whatsappIcon = asset('img/whatsapp_3938041.png');
@endphp

@if ($showWidget)
<div x-data="{ openChat: {{ !$isMobile ? 'true' : 'false' }} }" class="z-50">

  <!-- Botón/Burbuja flotante -->
  <button
    @click="openChat = !openChat"
    class="fixed bottom-5 right-5 flex items-center gap-2 bg-gray-200 text-gray-700
           text-sm font-semibold px-4 py-2 rounded-full shadow-md
           hover:bg-gray-300 transition cursor-pointer"
  >
    <img src="{{ $whatsappIcon }}" alt="WhatsApp" class="w-5 h-5" />
    Cotiza por WhatsApp
  </button>

  <!-- Cuadro de chat -->
  <div
    x-show="openChat"
    x-transition
    class="fixed bottom-16 right-5 w-80 bg-white rounded-xl shadow-lg border overflow-hidden
           font-sans text-sm"
    style="display: none;"
  >
    <!-- Botón (X) para cerrar -->
    <div
      class="absolute top-2 right-2 w-6 h-6 bg-gray-400 text-white text-center leading-6
             rounded-full cursor-pointer hover:bg-gray-600"
      @click="openChat = false"
    >
      X
    </div>

    <!-- Encabezado -->
    <div class="bg-[#043e81] text-white py-3 px-4">
      <h3 class="text-base font-bold">BSH</h3>
      <p class="text-xs mt-1">Normalmente responde en cuestión de minutos</p>
    </div>

    <!-- Contenido principal -->
    <div class="bg-white p-4">
      <div class="bg-green-100 text-gray-700 p-3 rounded-md shadow mb-3">
        ¿Tienes alguna pregunta? Estoy encantado de poder ayudarte.
      </div>
    </div>

    <!-- Botón WhatsApp -->
    <div class="bg-white text-center py-3 border-t">
        <a
          href="{{ $whatsappUrl }}"
          target="_blank"
          onclick="dataLayer.push({'event': 'Click to Chat'});" 
          class="inline-flex items-center gap-2 bg-[#25D366] text-white px-6 py-2 rounded-full
                 text-sm font-bold hover:bg-[#20b558] transition-colors"
        >
          <svg class="w-5 h-5 text-white" fill="currentColor" viewBox="0 0 20 20">
            <path d="M2 2.5A2.5 2.5 0 014.5 0h11A2.5 2.5 0 0118 2.5v15a2.5 2.5 0 01-2.5 2.5h-11A2.5 2.5 0 012 17.5v-15zM5 3a1 1 0 100 2 1 1 0 000-2zm6 14a1 1 0 110-2 1 1 0 010 2zm5-12H4v10h12V5z"/>
          </svg>
      
          Enviar WhatsApp
        </a>
    </div>

    <!-- Pie del widget -->
    <div class="bg-white text-center text-xs py-2 border-t text-gray-700 flex justify-center items-center gap-2">
      <span class="text-green-500">🟢 En línea</span> |
      <a href="/politica-de-privacidad" class="text-indigo-700 hover:underline">
        Política de privacidad
      </a>
    </div>
  </div>
</div>
@endif
