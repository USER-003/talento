<?php

use App\Models\Categoria;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CategoriaController;

Route::get('/', [CategoriaController::class, 'index'])->name('inicio');

Route::resource('servicio', ServicioController::class);

Route::resource('categoria', CategoriaController::class);
