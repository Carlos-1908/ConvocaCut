<?php

use Illuminate\Support\Facades\Route;




Route::get('/', function () {
    return view('welcome');
})->middleware(['guest']);
     
Route::get('/registroListo', [App\Http\Controllers\PdfController::class, 'listo'])->name('registroListo');
Route::get('/home1', [App\Http\Controllers\ConvocasController::class, 'index'])->name('home1');
Route::get('/kardex', [App\Http\Controllers\PdfController::class, 'kardex'])->name('kardex')->middleware(['auth']);
Route::post('/guardar', [App\Http\Controllers\PdfController::class, 'mguardar'])->name('guardar');
Route::get('/descargar', [App\Http\Controllers\PdfController::class, 'descargar'])->name('descargar');
Route::resource('/convocatorias', App\Http\Controllers\ConvocatoriaController::class)->middleware(['auth']);
Route::get('/DatosEquipos', [App\Http\Controllers\IntegrantesController::class, 'index'])->name('DatosEquipos');
Route::resource('/requisitos', App\Http\Controllers\RequisitoController::class)->middleware(['auth']);
Route::resource('/estatus', App\Http\Controllers\estatusController::class)->middleware(['auth']);
Route::resource('/calificacion', App\Http\Controllers\ConvocasController::class)->middleware(['auth']);
Route::get('/GenerarPdf', [App\Http\Controllers\PdfController::class, 'pdf'])->name('GenerarPdf')->middleware(['auth']);
Route::get('/calificar', [App\Http\Controllers\ConvocasController::class, 'calificar'])->name('calificar')->middleware(['auth']);
Route::resource('/convocatorias', App\Http\Controllers\ConvocatoriaController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/dashboardAdmins', function(){
    return view('dashboardAdmins');
})->name('dashboardP');
