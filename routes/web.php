<?php

use App\Http\Controllers\ComercioController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect()->route('comercios.index');
});

Route::get('/comercios', [ComercioController::class, 'index'])
    ->name('comercios.index');


Route::get('/comercios/{comercio}', [ComercioController::class, 'show'])
    ->name('comercios.show');
    
Route::get('/practica/formulario-demo', function () {
 return view('practica.formulario_demo');
});
