<?php

use App\Http\Controllers\ClienteController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\NivelParametroController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\RopaController;
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




Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', DashboardController::class)->name('dashboard');

   
    Route::get('payment/{id?}', [ PaymentController::class, 'show'])->name('payment.show');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    Route::get('payment/{id?}', [ PaymentController::class, 'index'])->name('payment');


    Route::get('/admin', function () {
        return view('admin.dashboard');
    })->name('admin/dashboard');
    
    Route::get('pruebas', function () {
        return view('pruebas.prueba');
    })->name('pruebas');
    
    Route::get('graficos', function () {
        return view('graficos.grafico');
    })->name('graficos');
    
    Route::resource('/nivel_parametros', NivelParametroController::class);
    Route::get('prendas/indexAll', [RopaController::class, 'getJson'])->name('prendas/indexAll');
    Route::get('parametros/indexAll', [RopaController::class, 'getJsonParametros'])->name('parametros/indexAll');
    Route::resource('/clientes', ClienteController::class);
    Route::resource('/ropas', RopaController::class);
    
    Route::get('prenda/buscador', [RopaController::class, 'buscador'])->name('prenda/buscador');
    Route::get('prenda/pdf', [RopaController::class,'generarPdf'])->name('prenda/pdf');
});
