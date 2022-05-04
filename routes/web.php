<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware(['guest']);

/*rutas para descargar carta compromiso, subir kardex y llenar formulario de integrantes
Route::get('/kardex', [App\Http\Controllers\PdfController::class, 'kardex'])->name('kardex')->middleware(['auth', 'verified']);
Route::post('/guardar', [App\Http\Controllers\PdfController::class, 'mguardar'])->name('guardar');
Route::get('/descargar', [App\Http\Controllers\PdfController::class, 'descargar'])->name('descargar');
*/
//})->middleware(['guest']);
Route::get('/home1', [App\Http\Controllers\ConvocasController::class, 'index'])->name('home1');
Route::get('/kardex', [App\Http\Controllers\PdfController::class, 'kardex'])->name('kardex')->middleware(['auth']);
Route::post('/guardar', [App\Http\Controllers\PdfController::class, 'mguardar'])->name('guardar');
Route::get('/descargar', [App\Http\Controllers\PdfController::class, 'descargar'])->name('descargar');
Route::resource('/convocatorias', App\Http\Controllers\ConvocatoriaController::class)->middleware(['auth']);
<<<<<<< HEAD
Route::get('/DatosEquipos', [App\Http\Controllers\IntegrantesController::class, 'index'])->name('DatosEquipos');
=======
Route::resource('/requisitos', App\Http\Controllers\RequisitoController::class)->middleware(['auth']);
>>>>>>> 830bb3f98f963f6cde5c92d70bb445acc956a776

Route::view('/Streaming', 'Streaming')->name('Streaming');

Route::get('/esperaRevReq', function () {
    return view('esperaRevReq');
});

Route::resource('/convocatorias', App\Http\Controllers\ConvocatoriaController::class)->middleware(['auth', 'verified']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__.'/auth.php';


Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/
/*Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');*/

Route::get('/dashboardAdmins', function(){
    return view('dashboardAdmins');
})->name('dashboardP');
