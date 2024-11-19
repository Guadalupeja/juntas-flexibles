<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;


Route::get('/', [PaginasController::class, 'inicio'])->name('inicio');
Route::get('/acerca', [PaginasController::class, 'acerca'])->name('acerca');