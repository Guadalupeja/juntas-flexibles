<?php

namespace App\Http\Controllers;

use App\Mail\NuevaSolicitudCotizacion;
use App\Models\QuoteRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;

class QuoteRequestController extends Controller
{
    /**
     * Guarda una solicitud de "COTIZA ESTA JUNTA" (punto 4 + punto 6 del plan JEX)
     * y avisa por correo al equipo comercial. No genera PDF: eso lo sigue haciendo
     * CotizacionController de forma independiente, como hasta ahora.
     */
    public function store(Request $request)
    {
        $datos = $request->validate([
            // Configuración de la junta, ya elegida en pasos anteriores del flujo.
            'modelo' => 'required|string|max:50',
            'materiales' => 'nullable|string|max:100',
            'materiales2' => 'nullable|string|max:100',
            'refuerzo' => 'nullable|string|max:150',
            'tipos_arco' => 'nullable|string|max:100',
            'normativas_brida' => 'nullable|string|max:100',
            'material_bridas' => 'nullable|string|max:100',
            'tipo_brida' => 'nullable|string|max:100',
            'temperatura_info' => 'nullable|string|max:100',
            'temperatura_info2' => 'nullable|string|max:100',
            'resultado' => 'nullable|string|max:2000',
            'encabezados_tabla' => 'nullable|string|max:2000',

            // Punto 6: información que hace falta para cotizar de verdad.
            'diametro_tuberia' => 'required|string|max:100',
            'largo_total' => 'required|string|max:100',
            'fluido_manejar' => 'required|string|max:150',
            'temperatura_manejar' => 'required|string|max:100',

            // Punto 4: datos comerciales.
            'nombre' => 'required|string|max:150',
            'empresa' => 'nullable|string|max:150',
            'correo' => 'required|email|max:150',
            'whatsapp' => 'required|string|max:30',
        ]);

        $quoteRequest = QuoteRequest::create($datos);

        $destinatarios = config('quotes.notify_emails', []);

        if (!empty($destinatarios)) {
            try {
                Mail::to($destinatarios)->send(new NuevaSolicitudCotizacion($quoteRequest));
            } catch (\Throwable $e) {
                // Si el correo falla (p. ej. SMTP no configurado todavía en el servidor),
                // la solicitud igual queda guardada en la base de datos y no rompemos
                // la experiencia del cliente que la está enviando.
                Log::warning('No se pudo enviar la notificación de nueva cotización: ' . $e->getMessage());
            }
        }

        return response()->json([
            'ok' => true,
            'message' => '¡Gracias! Recibimos tu solicitud, un asesor de BSH te contactará muy pronto.',
        ]);
    }
}
