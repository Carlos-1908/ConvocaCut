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
})->middleware('guest');
Route::get('/home1', [App\Http\Controllers\ConvocasController::class, 'index'])->name('home1');
Route::get('/kardex', [App\Http\Controllers\PdfController::class, 'kardex'])->name('kardex');
Route::post('/guardar', [App\Http\Controllers\PdfController::class, 'mguardar'])->name('guardar');
Route::get('/descargar', [App\Http\Controllers\PdfController::class, 'descargar'])->name('descargar');
Route::resource('/convocatorias', App\Http\Controllers\ConvocatoriaController::class)->middleware(['auth']);


Route::get('/esperaRevReq', function () {
    return view('esperaRevReq');
});


Route::get('/inicio', function () {
    return "ok";
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/dashboardAdmins', function(){
    return view('dashboardAdmins');
})->name('dashboardP');