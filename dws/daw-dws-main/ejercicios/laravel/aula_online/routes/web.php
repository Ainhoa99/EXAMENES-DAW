<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfesorController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('alumnos', AlumnoController::class);
Route::resource('profesores', ProfesorController::class);
Route::resource('cursos', ProfesorController::class);

Route::get('/', function () {
    return view('index');
});
