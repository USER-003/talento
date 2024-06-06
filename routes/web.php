<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\CategoriaDeServicioController;
use App\Http\Controllers\AuthController;
use App\Http\Middleware\AuthM;


// Navb routes
Route::get('/', [CategoriaDeServicioController::class, 'index'])->name('inicio');
Route::get('/tecnología', [CategoriaDeServicioController::class, 'tech'])->name('categoriaTech');
Route::get('/legales', [CategoriaDeServicioController::class, 'leyes'])->name('categoriaLeyes');
Route::get('/educación', [CategoriaDeServicioController::class, 'educacion'])->name('categoriaEducacion');
Route::get('/negocios', [CategoriaDeServicioController::class, 'negocios'])->name('categoriaNegocios');

Route::get('servicios', [ServicioController::class, 'category'])->name('category');
Route::get('informacion{servicio}', [ServicioController::class, 'info'])->name('servicio.info');



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
    
});

// Routes auth
Route::get('register', [AuthController::class, 'showRegistrationForm'])->name('register');
Route::post('registrarse', [AuthController::class, 'register'])->name('registrarse');
Route::get('login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('iniciar', [AuthController::class, 'login'])->name('iniciar');
Route::get('logout', [AuthController::class, 'logout'])->name('logout');

