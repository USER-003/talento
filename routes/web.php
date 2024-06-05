<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CategoriaDeServicioController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthM;


// Navb routes
Route::get('/', [CategoriaDeServicioController::class, 'index'])->name('inicio');
Route::get('/#')->name('#inicio');
Route::get('/#nosotros')->name('nosotros');
Route::get('/#testimonios')->name('testimonios');
Route::get('/#explorar')->name('todos');
Route::get('/#tech')->name('tech');
Route::get('/#negocios')->name('negocios');
Route::get('/#educacion')->name('educacion');
Route::get('/#leyes')->name('leyes');


//Route::get('/')
Route::middleware(AuthM::class)->group(function(){
    
    Route::resource('servicio', ServicioController::class);
    Route::resource('categoria', CategoriaController::class);

});

// Routes auth
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('registrarse', [AuthController::class, 'register'])->name('registrarse');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('iniciar', [AuthController::class, 'login'])->name('iniciar');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

