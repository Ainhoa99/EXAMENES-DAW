<?php

use App\Http\Controllers\AlumnoController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');

// Route::post('/alumnos',  [AlumnoController::class, 'store'])->name('alumnos.store');
// Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');

// Route::put('/alumnos/{id}', [AlumnoController::class, 'update'])->name('alumnos.update');
// Route::get('/alumnos/{id}/editar', [AlumnoController::class, 'edit'])->name('alumnos.edit');

// Route::get('/alumnos/{id}/ver', [AlumnoController::class, 'show'])->name('alumnos.show');

// Route::delete('/alumnos/{id}', [AlumnoController::class, 'destroy'])->name('alumnos.destroy');

// todas las rutas de arriba en una línea
Route::resource('alumnos', AlumnoController::class);
Route::get('/alumnos/{id}/confirmar', [AlumnoController::class, 'confirmar'])->name('alumnos.confirm');

Route::get('/cancelar', function () {
    return redirect()->route('alumnos.index')
        ->with('success', 'Accion cancelada');
})->name('cancelar');

Route::get('/test', ['middleware' => 'domingo', function () {
    return 'Probando ruta con middleware';
}]);

require __DIR__ . '/auth.php';
