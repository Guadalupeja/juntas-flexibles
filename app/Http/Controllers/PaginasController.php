<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaginasController extends Controller
{
     // Método para la página de inicio
     public function inicio()
     {
         return view('inicio'); // Nombre de la vista para la página de inicio
     }
 
     // Otro método para una segunda página, como "acerca de"
     public function acerca()
     {
         return view('acerca'); // Nombre de la vista para la página "acerca de"
     }
}
