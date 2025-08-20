<?php

return [
    // Activa/Desactiva rápido desde .env
    'enabled' => env('NITROLITE_ENABLED', true),

    // TTL (segundos) para la caché de página completa
    'ttl' => env('NITROLITE_TTL', 604800), // 7 días

    // Usaremos el store 'file' (nativo de Laravel)
    'store' => env('NITROLITE_STORE', 'file'),

    // Parámetros de query que NO deben cambiar la clave de caché
    'ignore_params' => [
        'utm_source','utm_medium','utm_campaign','utm_term','utm_content',
        'gclid','fbclid','_hsenc','_hsmi'
    ],

    // Cookies cuya presencia desactiva el page cache (usuarios logueados, etc.)
    'bypass_cookies' => [
        'laravel_session','XSRF-TOKEN'
    ],

    // Rutas a excluir (comodines simples)
    'exclude_paths' => [
        'admin*','panel*','dashboard*','login','register','password*','api/*'
    ],

    // Generar variante móvil/escritorio (por user-agent)
    'vary_by_device' => true,

    // Minificar HTML antes de guardarlo
    'minify' => env('NITROLITE_MINIFY', true),
];
