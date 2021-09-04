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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::middleware(['auth:sanctum', 'verified'])->get('/registrarSorteio', function () {
    return view('registrarSorteio');
})->name('registrarSorteio');

//passar o caminho completo do controlador no laravel 8x
Route::middleware(['auth:sanctum', 'verified'])->get(
    '/contato',
    'App\Http\Controllers\ContatoController@listContact')
    ->name('contato');

Route::middleware(['auth:sanctum', 'verified'])->post('/saveContact',
    'App\Http\Controllers\ContatoController@saveContact')->name('saveContact');









