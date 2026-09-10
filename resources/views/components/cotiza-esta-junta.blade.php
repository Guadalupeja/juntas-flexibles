{{--
    Punto 4 del plan JEX: acción "COTIZA ESTA JUNTA" al final de la Herramienta de
    Selección, pidiendo además datos comerciales. Punto 6: agrega diámetro de
    tubería, largo total, fluido y temperatura real de operación.

    Es independiente del botón "Generar PDF": no lo reemplaza ni lo bloquea, para
    que quien solo quiera su PDF lo siga descargando igual que hoy.
--}}
@props([
    'modelo',
    'materiales' => null,
    'materiales2' => null,
    'refuerzo' => null,
    'tiposArco' => null,
    'normativasBrida' => null,
    'materialBridas' => null,
    'tipoBrida' => null,
    'temperaturaInfo' => null,
    'temperaturaInfo2' => null,
    'resultado' => [],
    'encabezadosTabla' => [],
])

<div
  x-data="cotizaEstaJunta({
    modelo: @js($modelo),
    materiales: @js($materiales),
    materiales2: @js($materiales2),
    refuerzo: @js($refuerzo),
    tipos_arco: @js($tiposArco),
    normativas_brida: @js($normativasBrida),
    material_bridas: @js($materialBridas),
    tipo_brida: @js($tipoBrida),
    temperatura_info: @js($temperaturaInfo),
    temperatura_info2: @js($temperaturaInfo2),
    resultado: @js(implode(',', (array) $resultado)),
    encabezados_tabla: @js(implode(',', (array) $encabezadosTabla)),
  })"
  class="mt-6 border-2 border-primaryBlue rounded-xl p-5 md:p-6 bg-blue-50/40"
>
  <template x-if="!open && !sent">
    <div class="flex flex-col sm:flex-row items-center justify-between gap-4">
      <p class="text-sm text-primaryGray text-center sm:text-left">
        ¿Ya sabes qué junta necesitas? Solicita que un asesor te cotice esta configuración directamente.
      </p>
      <button
        type="button"
        @click="open = true"
        class="whitespace-nowrap bg-primaryBlue text-white rounded-full py-3 px-8 font-semibold hover:bg-blue-900 transition-colors cursor-pointer"
      >
        COTIZA ESTA JUNTA
      </button>
    </div>
  </template>

  <template x-if="open && !sent">
    <form @submit.prevent="enviar()" class="space-y-4">
      <h3 class="text-primaryBlue font-bold text-lg text-center">Cuéntanos los datos de tu aplicación</h3>

      <div class="grid gap-4 md:grid-cols-2">
        <div>
          <label for="diametro_tuberia" class="text-sm font-semibold text-primaryGray">Diámetro de tubería</label>
          <input type="text" id="diametro_tuberia" x-model="form.diametro_tuberia" required
                 placeholder='Ej. 4"'
                 class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
        </div>
        <div>
          <label for="largo_total" class="text-sm font-semibold text-primaryGray">Largo total requerido</label>
          <input type="text" id="largo_total" x-model="form.largo_total" required
                 placeholder='Ej. 12 m'
                 class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
        </div>
        <div>
          <label for="fluido_manejar" class="text-sm font-semibold text-primaryGray">Fluido a manejar</label>
          <input type="text" id="fluido_manejar" x-model="form.fluido_manejar" required
                 placeholder="Ej. Agua, vapor, aceite térmico..."
                 class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
        </div>
        <div>
          <label for="temperatura_manejar" class="text-sm font-semibold text-primaryGray">Temperatura de operación</label>
          <input type="text" id="temperatura_manejar" x-model="form.temperatura_manejar" required
                 placeholder='Ej. 85°C'
                 class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
        </div>
      </div>

      <hr class="border-gray-200">

      <div class="grid gap-4 md:grid-cols-2">
        <div>
          <label for="nombre" class="text-sm font-semibold text-primaryGray">Nombre</label>
          <input type="text" id="nombre" x-model="form.nombre" required
                 class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
        </div>
        <div>
          <label for="empresa" class="text-sm font-semibold text-primaryGray">Empresa</label>
          <input type="text" id="empresa" x-model="form.empresa"
                 class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
        </div>
        <div>
          <label for="correo" class="text-sm font-semibold text-primaryGray">Correo</label>
          <input type="email" id="correo" x-model="form.correo" required
                 class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
        </div>
        <div>
          <label for="whatsapp" class="text-sm font-semibold text-primaryGray">WhatsApp</label>
          <input type="tel" id="whatsapp" x-model="form.whatsapp" required
                 placeholder="Ej. 8331234567"
                 class="w-full p-2 border border-gray-300 rounded-md mt-1 text-sm">
        </div>
      </div>

      <p x-show="error" x-text="error" class="text-sm text-red-700 bg-red-50 border border-red-200 rounded-md p-2"></p>

      <div class="flex flex-col sm:flex-row justify-end gap-3">
        <button type="button" @click="open = false" :disabled="loading"
                class="text-primaryGray rounded-full py-3 px-6 hover:bg-gray-100 transition-colors cursor-pointer disabled:opacity-50">
          Cancelar
        </button>
        <button type="submit" :disabled="loading"
                class="bg-primaryBlue text-white rounded-full py-3 px-8 font-semibold hover:bg-blue-900 transition-colors cursor-pointer disabled:opacity-50">
          <span x-show="!loading">Enviar solicitud</span>
          <span x-show="loading" style="display:none;">Enviando…</span>
        </button>
      </div>
    </form>
  </template>

  <template x-if="sent">
    <div class="text-center py-4">
      <p class="font-semibold text-green-700 text-base" x-text="successMessage"></p>
    </div>
  </template>
</div>

<script>
  function cotizaEstaJunta(tecnico) {
    return {
      open: false,
      loading: false,
      sent: false,
      error: null,
      successMessage: '',
      form: {
        diametro_tuberia: '',
        largo_total: '',
        fluido_manejar: '',
        temperatura_manejar: '',
        nombre: '',
        empresa: '',
        correo: '',
        whatsapp: '',
      },
      async enviar() {
        this.loading = true;
        this.error = null;
        try {
          const response = await fetch("{{ route('cotiza.junta') }}", {
            method: 'POST',
            headers: {
              'Content-Type': 'application/json',
              'Accept': 'application/json',
              'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ ...tecnico, ...this.form }),
          });

          const data = await response.json();

          if (!response.ok) {
            const primerError = data.errors ? Object.values(data.errors)[0][0] : null;
            this.error = primerError || data.message || 'No pudimos enviar tu solicitud. Intenta de nuevo.';
            return;
          }

          this.successMessage = data.message || '¡Gracias! Un asesor te contactará pronto.';
          this.sent = true;
        } catch (e) {
          this.error = 'No pudimos conectarnos. Revisa tu conexión e intenta de nuevo.';
        } finally {
          this.loading = false;
        }
      },
    };
  }
</script>
