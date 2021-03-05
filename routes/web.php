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
Route::get('/1', [App\Http\Controllers\ProblemasController::class, 'problema1'])->name('problema1');

Route::get('/2', function () {
    return view('problema2');
});
Route::post('/imprimirRecibo', [App\Http\Controllers\ProblemasController::class, 'problema2Imprimir'])->name('imprimirRecibo');

Route::get('/3', function () {
    return view('problema3');
});
Route::post('/fibonacci', [App\Http\Controllers\ProblemasController::class, 'fibonacci'])->name('fibonacci');