<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    //

    protected $fillable = [
        'page_id',
        'rating',
    ];

        // Relación con el modelo User
        public function user()
        {
            return $this->belongsTo(User::class);
        }
}
