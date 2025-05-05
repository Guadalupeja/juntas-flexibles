<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rating;

class RatingController extends Controller
{
    // Método para almacenar la puntuación
    public function store(Request $request)
    {
        // Validar los datos recibidos
        $validated = $request->validate([
            'page_id' => 'required|integer',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        // Crear una nueva puntuación
        Rating::create($validated);

        // Obtener los nuevos valores de votos y promedio
        $ratings = Rating::where('page_id', $validated['page_id']);
        $average = round($ratings->avg('rating'), 2);
        $votes = $ratings->count();

        return response()->json([
            'success' => true,
            'average' => $average,
            'votes' => $votes,
        ]);
    }

    // Método para obtener la puntuación promedio y el número de votos
    public function show($page_id)
    {
        $ratings = Rating::where('page_id', $page_id);
        $average = round($ratings->avg('rating'), 2);
        $votes = $ratings->count();

        return response()->json([
            'average' => $average,
            'votes' => $votes,
        ]);
    }
}

