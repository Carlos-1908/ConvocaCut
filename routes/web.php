<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
})->middleware(['guest']);

Route::get('/home1', [App\Http\Controllers\ConvocasController::class, 'index'])->name('home1');
Route::get('/kardex', [App\Http\Controllers\PdfController::class, 'kardex'])->name('kardex') ->middleware(['verified','auth']);
Route::post('/guardar', [App\Http\Controllers\PdfController::class, 'mguardar'])->name('guardar');
Route::get('/descargar', [App\Http\Controllers\PdfController::class, 'descargar'])->name('descargar');
Route::resource('/convocatorias', App\Http\Controllers\ConvocatoriaController::class)->middleware(['auth']);
Route::resource('/requisitos', App\Http\Controllers\RequisitoController::class)->middleware(['auth']);
Route::get('/DatosEquipos', [App\Http\Controllers\IntegrantesController::class, 'index'])->name('DatosEquipos');

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
