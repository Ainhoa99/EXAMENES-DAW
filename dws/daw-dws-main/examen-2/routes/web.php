<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\JuegoController;

Route::get('/', [CategoriaController::class, 'index'])
    ->name('index');

Route::get('/categoria/{categoria}', [CategoriaController::class, 'filter'])
    ->name('filter');

Route::get('/juego/confirmar/{id}', [JuegoController::class, 'confirmarDestroy'])
    ->name('juego.confirmar');

Route::resource('/juego', JuegoController::class);
