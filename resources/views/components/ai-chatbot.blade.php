{{--
    Asistente virtual con IA (Claude Haiku vía API de Anthropic).
    Requiere ANTHROPIC_API_KEY configurada en .env; si no está configurada,
    el backend responde con un mensaje amable en vez de fallar.
--}}
<div
  x-data="aiChatbot()"
  x-init="init()"
  class="z-50"
>
  <!-- Botón/burbuja flotante -->
  <button
    @click="open = !open"
    class="fixed bottom-5 left-5 flex items-center gap-2 bg-[#164ec9] text-white
           text-sm font-semibold px-4 py-3 rounded-full shadow-lg
           hover:bg-[#123f9e] transition cursor-pointer"
  >
    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M21 12c0 4.418-4.03 8-9 8-1.06 0-2.076-.163-3.02-.463L3 21l1.5-4.5C3.55 15.14 3 13.62 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
    </svg>
    <span x-show="!open">Pregúntale a BSH</span>
    <span x-show="open" style="display:none;">Cerrar</span>
  </button>

  <!-- Panel de chat -->
  <div
    x-show="open"
    x-transition
    style="display:none;"
    class="fixed bottom-20 left-5 w-80 max-w-[calc(100vw-2.5rem)] h-[28rem] max-h-[70vh]
           bg-white rounded-xl shadow-2xl border overflow-hidden flex flex-col font-sans text-sm"
  >
    <!-- Encabezado -->
    <div class="bg-[#164ec9] text-white py-3 px-4 flex items-center justify-between">
      <div>
        <h3 class="text-base font-bold">Asistente BSH</h3>
        <p class="text-xs mt-0.5 text-blue-100">Te ayudo a elegir tu junta de expansión</p>
      </div>
      <button @click="open = false" class="text-white/80 hover:text-white text-xl leading-none">&times;</button>
    </div>

    <!-- Mensajes -->
    <div class="flex-1 overflow-y-auto p-3 space-y-2 bg-gray-50" x-ref="scrollArea">
      <template x-for="(m, i) in messages" :key="i">
        <div :class="m.role === 'user' ? 'flex justify-end' : 'flex justify-start'">
          <div
            :class="m.role === 'user'
              ? 'bg-[#164ec9] text-white rounded-2xl rounded-br-sm px-3 py-2 max-w-[85%]'
              : 'bg-white border text-gray-800 rounded-2xl rounded-bl-sm px-3 py-2 max-w-[85%]'"
            style="white-space: pre-line;"
            x-text="m.content"
          ></div>
        </div>
      </template>

      <div x-show="loading" class="flex justify-start">
        <div class="bg-white border text-gray-400 rounded-2xl rounded-bl-sm px-3 py-2 text-xs">
          escribiendo…
        </div>
      </div>
    </div>

    <!-- Accesos rápidos -->
    <div class="px-3 pt-2 bg-white border-t flex flex-wrap gap-2">
      <a href="{{ route('selecciona_juntas') }}" class="text-xs bg-blue-50 text-[#164ec9] px-2 py-1 rounded-full hover:bg-blue-100">
        Ir a la Herramienta de Selección
      </a>
      <a href="{{ route('contact') }}" class="text-xs bg-blue-50 text-[#164ec9] px-2 py-1 rounded-full hover:bg-blue-100">
        Hablar con un asesor
      </a>
    </div>

    <!-- Input -->
    <form @submit.prevent="send()" class="p-3 border-t bg-white flex gap-2">
      <input
        type="text"
        x-model="draft"
        :disabled="loading"
        placeholder="Escribe tu pregunta…"
        class="flex-1 border rounded-full px-3 py-2 text-sm focus:outline-none focus:ring-2 focus:ring-[#164ec9]"
      />
      <button
        type="submit"
        :disabled="loading || draft.trim() === ''"
        class="bg-[#164ec9] text-white rounded-full px-4 py-2 text-sm font-semibold disabled:opacity-50"
      >
        Enviar
      </button>
    </form>
  </div>
</div>

<script>
  function aiChatbot() {
    return {
      open: false,
      loading: false,
      draft: '',
      messages: [
        { role: 'assistant', content: '¡Hola! Soy el asistente de BSH. Cuéntame qué tipo de tubería o proyecto tienes y te ayudo a encontrar la junta de expansión adecuada.' },
      ],
      init() {},
      async send() {
        const text = this.draft.trim();
        if (!text || this.loading) return;

        this.messages.push({ role: 'user', content: text });
        this.draft = '';
        this.loading = true;
        this.scrollToBottom();

        try {
          const response = await fetch("{{ route('asistente.chat') }}", {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({
              // Solo enviamos rol + contenido; recortamos a los últimos 12 mensajes para controlar costo.
              messages: this.messages.slice(-12).map(m => ({ role: m.role, content: m.content })),
            }),
          });

          const data = await response.json();
          this.messages.push({ role: 'assistant', content: data.reply || 'No pude responder en este momento.' });
        } catch (e) {
          this.messages.push({ role: 'assistant', content: 'No pude conectarme en este momento. Intenta de nuevo o escríbenos por WhatsApp.' });
        } finally {
          this.loading = false;
          this.scrollToBottom();
        }
      },
      scrollToBottom() {
        this.$nextTick(() => {
          const el = this.$refs.scrollArea;
          if (el) el.scrollTop = el.scrollHeight;
        });
      },
    };
  }
</script>
