<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PaginasController;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\FiltrosController;
use App\Http\Controllers\CotizacionController;
use App\Http\Controllers\PdfController;
use Spatie\ResponseCache\Middlewares\CacheResponse;

// Grupo con la clase de middleware directamente:
Route::middleware([CacheResponse::class])->group(function () {



Route::get('/', [PaginasController::class, 'inicio'])->name('inicio');
Route::get('/selecciona-juntas-de-expansion', [PaginasController::class, 'selecciona_juntas'])->name('selecciona_juntas');

Route::get('/junta-flexible-bsh-1110', [PaginasController::class, 'junta_flexible_bsh_1110'])->name('junta_flexible_bsh_1110');
Route::get('/junta-flexible-bsh-111c', [PaginasController::class, 'junta_flexible_bsh_111c'])->name('junta_flexible_bsh_111c');

Route::get('/junta-flexible-bsh-111e', [PaginasController::class, 'junta_flexible_bsh_111e'])->name('junta_flexible_bsh_111e');
Route::get('/junta-flexible-bsh-1120', [PaginasController::class, 'junta_flexible_bsh_1120'])->name('junta_flexible_bsh_1120');
Route::get('/junta-flexible-bsh-1130', [PaginasController::class, 'junta_flexible_bsh_1130'])->name('junta_flexible_bsh_1130');

Route::get('/junta-flexible-bsh-2210', [PaginasController::class, 'junta_flexible_bsh_2210'])->name('junta_flexible_bsh_2210');


Route::get('/acerca', [PaginasController::class, 'acerca'])->name('acerca');

Route::get('/contact', [PaginasController::class, 'contact'])->name('contact');
Route::get('/estilos-juntas-de-expansion-bsh', [PaginasController::class, 'estilos'])->name('estilos');
Route::get('/gracias', [PaginasController::class, 'gracias'])->name('gracias');
Route::get('/aviso-de-privacidad', [PaginasController::class, 'aviso_de_privacidad'])->name('aviso-de-privacidad');
Route::get('/2022/11/28/como-seleccionar-adecuadamente-una-junta-de-expansion', [PaginasController::class, 'seleccionar_adecuadamente_una_junta'])->name('seleccionar-adecuadamente-una-junta');
Route::get('/preguntas-frecuentes', [PaginasController::class, 'preguntas_frecuentes'])->name('preguntas-frecuentes');
Route::get('/2023/06/29/de-que-materiales-estan-hechas-las-juntas-de-expansion', [PaginasController::class, 'de_que_materiales'])->name('de-que-materiales');
Route::get('/2023/07/26/que-es-una-junta-de-expansion-bridada/', [PaginasController::class, 'que_es_una_junta'])->name('que-es-una-junta');
Route::get('/2023/09/08/guia-de-juntas-de-expansion-medidas-comunes-y-su-importancia/', [PaginasController::class, 'guia_de_juntas'])->name('guia-de-juntas');





Route::post('/filtros-seleccion', [FiltrosController::class, 'filtrosSeleccion'])->name('filtros.seleccion');
Route::post('/seccion-cuatro', [FiltrosController::class, 'filtrosSeleccionSegundaEtapa'])->name('filtros.segundaEtapa');
Route::post('/cotizacion-generada', [CotizacionController::class, 'generarCotizacion'])->name('cotizacion.generada');
Route::get('/pdf-basico', [PdfController::class, 'generarPDF']);


Route::post('/rate-page', [RatingController::class, 'store'])->name('rate.page');
Route::get('/get-rating/{page_id}', [RatingController::class, 'show'])->name('get.rating');
});