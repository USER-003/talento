<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CategoriaDeServicioController;

Route::get('/', [CategoriaDeServicioController::class, 'index'])->name('inicio');

Route::resource('servicio', ServicioController::class);

Route::resource('categoria', CategoriaDeServicioController::class);

// Navb routes

Route::get('/')
