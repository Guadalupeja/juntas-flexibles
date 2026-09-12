<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Notificaciones de nuevas solicitudes de cotización
    |--------------------------------------------------------------------------
    |
    | Direcciones que reciben un correo cada vez que alguien envía el
    | formulario "COTIZA ESTA JUNTA". Acepta una o varias direcciones
    | separadas por coma en QUOTE_NOTIFICATION_EMAILS (.env).
    |
    | Por defecto llega a tu correo de Google Workspace. Si más adelante quieres
    | sumar más direcciones (ej. bsh@bombasellos.com.mx), agrégalas en el
    | .env separadas por coma, sin tocar código:
    | QUOTE_NOTIFICATION_EMAILS=guadalupe.juarez@bombasellos.com.mx,bsh@bombasellos.com.mx
    |
    */

    'notify_emails' => array_values(array_filter(array_map(
        'trim',
        explode(',', env('QUOTE_NOTIFICATION_EMAILS', 'guadalupe.juarez@bombasellos.com.mx'))
    ))),

];
