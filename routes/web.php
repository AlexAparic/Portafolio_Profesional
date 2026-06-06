<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactoController;


Route::get('/', function () {
    return view('portafolio');
});


Route::post('/contacto', [ContactoController::class, 'enviar'])
    ->name('contacto.enviar');