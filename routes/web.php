<?php

use App\Http\Controllers\EnlacesurnaController;
use Illuminate\Support\Facades\Route;



Route::get('/', [EnlacesurnaController::class, 'inicio'])->name('pantalla.inicio');

Route::get('/registro', [EnlacesurnaController::class, 'pantalla_registro'])->name('pantalla.opciones_registro');

Route::get('/registro/votante', [EnlacesurnaController::class, 'pantalla_votante'])->name('pantalla.votantes');

Route::get('/registro/postulado', [EnlacesurnaController::class, 'pantalla_postulado'])->name('pantalla.postulados');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
