<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/sesion', function () {
    return view('sesion');
})->name('sesion');

Route::get('/servicios', function () {
    return view('servicios');
})->name('servicios');
