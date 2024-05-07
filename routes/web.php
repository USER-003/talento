<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;

Route::get('/', function () {
    return view('index');
})->name('inicio');

Route::resource('servicio', ServicioController::class);
