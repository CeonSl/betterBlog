<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\NivelParametroController;
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
    return view('auth.register');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    
    Route::get('pruebas', function () {
        return view('pruebas.prueba');
    })->name('pruebas');

    Route::get('graficos', function () {
        return view('graficos.grafico');
    })->name('graficos');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('nivel_parametros', NivelParametroController::class)->names('nivel_parametros');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::resource('clientes', ClienteController::class)->names('clientes');
});
