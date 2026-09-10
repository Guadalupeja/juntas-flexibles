<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuoteRequest extends Model
{
    protected $fillable = [
        'modelo',
        'materiales',
        'materiales2',
        'refuerzo',
        'tipos_arco',
        'normativas_brida',
        'material_bridas',
        'tipo_brida',
        'temperatura_info',
        'temperatura_info2',
        'diametro_tuberia',
        'largo_total',
        'fluido_manejar',
        'temperatura_manejar',
        'nombre',
        'empresa',
        'correo',
        'whatsapp',
        'resultado',
        'encabezados_tabla',
        'contactado_at',
    ];

    protected $casts = [
        'contactado_at' => 'datetime',
    ];
}
