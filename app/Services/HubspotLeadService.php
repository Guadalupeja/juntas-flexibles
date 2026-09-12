<?php

namespace App\Services;

use App\Models\QuoteRequest;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;

/**
 * Registra cada solicitud de "COTIZA ESTA JUNTA" como contacto en HubSpot
 * (nombre, correo, empresa, teléfono, marcado como "lead") para que quede
 * disponible en tus listas y campañas de mailing semanales de seguimiento.
 *
 * Solo usa el scope de contacts (crm.objects.contacts.read/write) — las
 * "Claves de servicio" de HubSpot todavía no ofrecen el scope de notas, así
 * que el detalle técnico completo de cada solicitud (modelo, materiales,
 * diámetro, fluido, etc.) se queda en el correo de notificación y en la
 * base de datos del sitio (tabla quote_requests), no se duplica en HubSpot.
 *
 * No sustituye el guardado en quote_requests: si HubSpot falla o no está
 * configurado, la solicitud igual queda guardada en la base de datos.
 */
class HubspotLeadService
{
    private const BASE_URL = 'https://api.hubapi.com';

    public function registrarSolicitud(QuoteRequest $quoteRequest): void
    {
        $token = config('services.hubspot.access_token');

        if (empty($token)) {
            // HubSpot no está configurado todavía: no es un error, solo se omite.
            return;
        }

        try {
            $contactId = $this->upsertContacto($token, $quoteRequest);
            Log::info("HubSpot: solicitud #{$quoteRequest->id} -> contacto " . ($contactId ?: '(sin id, ver warning anterior)'));
        } catch (\Throwable $e) {
            Log::warning('No se pudo registrar la solicitud de cotización en HubSpot (excepción): ' . $e->getMessage());
        }
    }

    private function upsertContacto(string $token, QuoteRequest $quoteRequest): ?string
    {
        [$nombre, $apellido] = $this->partirNombre($quoteRequest->nombre);

        $response = Http::withToken($token)
            ->timeout(8)
            ->post(self::BASE_URL . '/crm/v3/objects/contacts?idProperty=email', [
                'properties' => [
                    'email' => $quoteRequest->correo,
                    'firstname' => $nombre,
                    'lastname' => $apellido,
                    'company' => $quoteRequest->empresa,
                    'phone' => $quoteRequest->whatsapp,
                    'lifecyclestage' => 'lead',
                ],
            ]);

        Log::debug("HubSpot upsert contacto — status {$response->status()}: " . $response->body());

        if ($response->successful()) {
            return $response->json('id');
        }

        // Si el contacto ya existe, HubSpot responde 409 con el ID existente en el mensaje.
        if ($response->status() === 409) {
            $mensaje = (string) $response->json('message');
            if (preg_match('/[Ii][Dd]:?\s*(\d+)/', $mensaje, $m)) {
                $updateResponse = Http::withToken($token)
                    ->timeout(8)
                    ->patch(self::BASE_URL . '/crm/v3/objects/contacts/' . $m[1], [
                        'properties' => [
                            'firstname' => $nombre,
                            'lastname' => $apellido,
                            'company' => $quoteRequest->empresa,
                            'phone' => $quoteRequest->whatsapp,
                        ],
                    ]);

                if (!$updateResponse->successful()) {
                    Log::warning("HubSpot rechazó la actualización del contacto {$m[1]}: " . $updateResponse->body());
                }

                return $m[1];
            }

            Log::warning("HubSpot: contacto duplicado (409) pero no se pudo extraer el ID del mensaje: {$mensaje}");
            return null;
        }

        Log::warning("HubSpot rechazó la creación del contacto (status {$response->status()}): " . $response->body());
        return null;
    }

    /**
     * HubSpot separa nombre y apellido; el formulario del sitio solo pide "Nombre" completo,
     * así que partimos por el primer espacio (mejor esfuerzo, sin pedirle un campo extra al cliente).
     */
    private function partirNombre(string $nombreCompleto): array
    {
        $partes = explode(' ', trim($nombreCompleto), 2);
        return [$partes[0] ?? $nombreCompleto, $partes[1] ?? ''];
    }
}
