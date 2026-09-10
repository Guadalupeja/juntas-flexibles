<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>Nueva solicitud de cotización</title>
</head>
<body style="margin:0; padding:0; background:#f4f4f4; font-family: Arial, Helvetica, sans-serif; color:#333;">
  <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background:#f4f4f4; padding:24px 0;">
    <tr>
      <td align="center">
        <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background:#ffffff; border-radius:8px; overflow:hidden;">
          <tr>
            <td style="background:#5a0f0d; padding:20px 24px;">
              <h1 style="color:#ffffff; font-size:18px; margin:0;">Nueva solicitud de cotización</h1>
              <p style="color:#f1d9d8; font-size:13px; margin:4px 0 0;">Junta de Expansión estilo {{ $quoteRequest->modelo }} — juntasflexibles.com</p>
            </td>
          </tr>
          <tr>
            <td style="padding:24px;">
              <h2 style="font-size:15px; color:#5a0f0d; margin:0 0 10px;">Datos comerciales</h2>
              <table role="presentation" width="100%" cellpadding="6" cellspacing="0" style="font-size:14px; margin-bottom:20px;">
                <tr><td style="width:160px; color:#777;">Nombre</td><td><strong>{{ $quoteRequest->nombre }}</strong></td></tr>
                <tr><td style="color:#777;">Empresa</td><td>{{ $quoteRequest->empresa ?: '—' }}</td></tr>
                <tr><td style="color:#777;">Correo</td><td><a href="mailto:{{ $quoteRequest->correo }}">{{ $quoteRequest->correo }}</a></td></tr>
                <tr><td style="color:#777;">WhatsApp</td><td><a href="https://wa.me/{{ preg_replace('/\D/', '', $quoteRequest->whatsapp) }}">{{ $quoteRequest->whatsapp }}</a></td></tr>
              </table>

              <h2 style="font-size:15px; color:#5a0f0d; margin:0 0 10px;">Datos de la aplicación</h2>
              <table role="presentation" width="100%" cellpadding="6" cellspacing="0" style="font-size:14px; margin-bottom:20px;">
                <tr><td style="width:160px; color:#777;">Diámetro de tubería</td><td>{{ $quoteRequest->diametro_tuberia }}</td></tr>
                <tr><td style="color:#777;">Largo total</td><td>{{ $quoteRequest->largo_total }}</td></tr>
                <tr><td style="color:#777;">Fluido a manejar</td><td>{{ $quoteRequest->fluido_manejar }}</td></tr>
                <tr><td style="color:#777;">Temperatura de operación</td><td>{{ $quoteRequest->temperatura_manejar }}</td></tr>
              </table>

              <h2 style="font-size:15px; color:#5a0f0d; margin:0 0 10px;">Configuración de la junta</h2>
              <table role="presentation" width="100%" cellpadding="6" cellspacing="0" style="font-size:14px;">
                <tr><td style="width:160px; color:#777;">Modelo</td><td>{{ $quoteRequest->modelo }}</td></tr>
                <tr><td style="color:#777;">Material interior</td><td>{{ $quoteRequest->materiales }}</td></tr>
                <tr><td style="color:#777;">Material exterior</td><td>{{ $quoteRequest->materiales2 }}</td></tr>
                <tr><td style="color:#777;">Refuerzo</td><td>{{ $quoteRequest->refuerzo }}</td></tr>
                <tr><td style="color:#777;">Tipo de arco</td><td>{{ $quoteRequest->tipos_arco }}</td></tr>
                <tr><td style="color:#777;">Normativa de bridas</td><td>{{ $quoteRequest->normativas_brida }}</td></tr>
                <tr><td style="color:#777;">Material de bridas</td><td>{{ $quoteRequest->material_bridas }}</td></tr>
                <tr><td style="color:#777;">Tipo de brida</td><td>{{ $quoteRequest->tipo_brida }}</td></tr>
              </table>

              <p style="font-size:12px; color:#999; margin-top:24px;">
                Solicitud #{{ $quoteRequest->id }} recibida el {{ $quoteRequest->created_at->format('d/m/Y H:i') }} desde juntasflexibles.com.
              </p>
            </td>
          </tr>
        </table>
      </td>
    </tr>
  </table>
</body>
</html>
