<?php

namespace App\Mail;

use App\Models\QuoteRequest;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class NuevaSolicitudCotizacion extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public QuoteRequest $quoteRequest)
    {
    }

    public function build()
    {
        $mail = $this
            ->subject("Nueva solicitud de cotización — Junta {$this->quoteRequest->modelo}")
            ->view('emails.nueva-solicitud-cotizacion', [
                'quoteRequest' => $this->quoteRequest,
            ]);

        // Para que responder el correo le llegue directo al cliente que pidió la cotización.
        if ($this->quoteRequest->correo) {
            $mail->replyTo($this->quoteRequest->correo, $this->quoteRequest->nombre);
        }

        return $mail;
    }
}
