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
    | Mientras esté en pruebas, deja solo bshgroupcrm@gmail.com. Cuando
    | quieras que también llegue a bsh@bombasellos.com.mx, agrégalo en el
    | .env así (sin tocar código):
    | QUOTE_NOTIFICATION_EMAILS=bshgroupcrm@gmail.com,bsh@bombasellos.com.mx
    |
    */

    'notify_emails' => array_values(array_filter(array_map(
        'trim',
        explode(',', env('QUOTE_NOTIFICATION_EMAILS', 'bshgroupcrm@gmail.com'))
    ))),

];
