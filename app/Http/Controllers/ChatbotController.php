<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

class ChatbotController extends Controller
{
    /**
     * Máximo de mensajes previos (usuario + asistente) que se reenvían como
     * contexto en cada llamada, para controlar el costo por conversación.
     */
    private const MAX_HISTORY_MESSAGES = 12;

    private const MAX_RESPONSE_TOKENS = 500;

    public function respond(Request $request): JsonResponse
    {
        $validated = $request->validate([
            'messages' => ['required', 'array', 'min:1', 'max:' . self::MAX_HISTORY_MESSAGES],
            'messages.*.role' => ['required', 'in:user,assistant'],
            'messages.*.content' => ['required', 'string', 'max:2000'],
        ]);

        $apiKey = config('services.anthropic.api_key');

        if (empty($apiKey)) {
            Log::warning('Chatbot: ANTHROPIC_API_KEY no configurada.');

            return response()->json([
                'error' => 'not_configured',
                'reply' => 'El asistente todavía no está activado en este sitio. Mientras tanto, usa la Herramienta de Selección o escríbenos por WhatsApp.',
            ], 200);
        }

        $messages = collect($validated['messages'])
            ->map(fn ($m) => ['role' => $m['role'], 'content' => $m['content']])
            ->all();

        try {
            $response = Http::withHeaders([
                'x-api-key' => $apiKey,
                'anthropic-version' => '2023-06-01',
                'content-type' => 'application/json',
            ])
                ->timeout(20)
                ->post('https://api.anthropic.com/v1/messages', [
                    'model' => config('services.anthropic.model'),
                    'max_tokens' => self::MAX_RESPONSE_TOKENS,
                    'system' => $this->systemPrompt(),
                    'messages' => $messages,
                ]);

            if ($response->failed()) {
                Log::error('Chatbot: error de la API de Anthropic', [
                    'status' => $response->status(),
                    'body' => $response->body(),
                ]);

                return response()->json([
                    'error' => 'upstream_error',
                    'reply' => 'Tuvimos un problema para responder. Intenta de nuevo en un momento, o usa la Herramienta de Selección directamente.',
                ], 200);
            }

            $data = $response->json();
            $reply = collect($data['content'] ?? [])
                ->where('type', 'text')
                ->pluck('text')
                ->implode("\n");

            return response()->json([
                'reply' => $reply !== '' ? $reply : 'No estoy segura de haber entendido tu pregunta, ¿puedes reformularla?',
            ]);
        } catch (\Throwable $e) {
            Log::error('Chatbot: excepción al llamar a Anthropic', ['message' => $e->getMessage()]);

            return response()->json([
                'error' => 'exception',
                'reply' => 'Tuvimos un problema técnico. Intenta de nuevo en un momento, o usa la Herramienta de Selección directamente.',
            ], 200);
        }
    }

    private function systemPrompt(): string
    {
        return <<<'PROMPT'
Eres el asistente virtual de BSH (Bombas Sellos y Hules Industriales), fabricante mexicano de juntas de expansión y juntas flexibles bridadas para tuberías industriales (juntasflexibles.com).

Tu objetivo principal es ayudar al visitante a identificar qué junta necesita y llevarlo a que la seleccione o la cotice. No eres un asistente general: si preguntan algo totalmente ajeno a juntas de expansión, tuberías, bridas o los servicios de BSH, redirige amablemente la conversación hacia cómo puedes ayudarles con su proyecto de tuberías.

Conocimiento que puedes usar (mantente dentro de esto, no inventes datos técnicos ni de contacto que no tengas):
- Materiales disponibles: Nitrilo (NBR) para aceites y derivados del petróleo, EPDM para temperatura y agentes atmosféricos, Viton (FKM) para químicos agresivos, Teflón (PTFE) para industria farmacéutica/alimenticia, Neopreno para alta resistencia mecánica y química.
- Normas de brida que se manejan: ANSI/ASME B16.5, DIN 2501/2502, AWWA C207.
- Tipos de brida: fija (integrada al cuerpo) o loose/van stone (gira libremente, facilita alinear barrenos).
- La clase de brida (150#, 300#, etc.) indica la presión nominal soportada.
- Estilos de junta según número de arcos: arco simple (más económico, menos movimiento), doble y triple arco (mayor absorción de movimiento axial, lateral y angular).
- Para cotizar, se necesita: diámetro de tubería, norma y clase de brida, largo total disponible, y el fluido y temperatura a manejar.

Páginas del sitio a las que puedes dirigir al visitante (usa rutas relativas, el sitio las resuelve):
- /selecciona-juntas-de-expansion — Herramienta de Selección paso a paso (recomiéndala siempre que el visitante ya sepa o esté definiendo qué junta necesita).
- /preguntas-frecuentes — preguntas frecuentes técnicas.
- /contact — contacto directo con un asesor humano.
- El botón/enlace de WhatsApp del propio sitio, para hablar con un asesor humano si el tema es complejo, requiere trato personalizado, o el visitante lo pide explícitamente.

Estilo: respuestas breves (2-4 líneas), claras, en español de México, profesionales pero cercanas. Termina la mayoría de tus respuestas invitando a usar la Herramienta de Selección o a compartir los datos necesarios para cotizar, según qué tan avanzada esté la conversación. Nunca inventes precios, plazos de entrega ni promesas comerciales que no tengas.
PROMPT;
    }
}
