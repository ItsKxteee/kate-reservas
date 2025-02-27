<?php

use App\Http\Controllers\reserva_espacios;
use App\Http\Controllers\Historial;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    //return "Hola, Laravel está funcionando!";
    return view('home.home');
});

Route::get('/plantilla', function () {
    return view('layouts.plantilla'); 
})->name('layouts.plantilla');

Route::resource('opciones', reserva_espacios::class);
Route::resource('opcion_historial', Historial::class);
