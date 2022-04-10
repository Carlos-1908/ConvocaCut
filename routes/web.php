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
});


Route::get('/kardex', [App\Http\Controllers\PdfController::class, 'kardex'])->name('kardex');
Route::post('/guardar', [App\Http\Controllers\PdfController::class, 'mguardar'])->name('guardar');

Route::get('/inicio', function () {
    return "ok";
});
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
