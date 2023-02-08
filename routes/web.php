<?php

use App\Http\Controllers\ContactanosController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CursoController;

Route::get('/', [HomeController::class, 'index'])->name('home');

// Para agrupar todas las rutas de un mismo controlador se utiliza la función ::group()
/* Route::controller(CursoController::class)->group(function(){
    Route::get('/cursos', 'index')->name('cursos.index');
    Route::get('/cursos/create', 'create')->name('cursos.create');
    Route::post('/cursos','store')->name('cursos.store');
    Route::get('/cursos/{curso}', 'show')->name('cursos.show');
    Route::get('/cursos/{curso}/edit','edit')->name('cursos.edit');
    Route::put('/cursos/{curso}','update')->name('cursos.update');
    Route::delete('/cursos/{curso}','destroy')->name('cursos.destroy');
}); */

// Es posible definir todas las rutas con una sola línea de código así:
Route::resource('cursos', CursoController::class);

/* Para renombrar las url y los nombres de los parametros se realiza asÍ:
Route::resource('asignaturas', CursoController::class)->parameters(['asignaturas' => 'curso'])->names('cursos'); */
Route::view('/nosotros','nosotros')->name('nosotros');

Route::controller(ContactanosController::class)->group(function(){
    Route::get('/contactanos', 'index')->name('contactanos.index');
    Route::post('/contactanos', 'store')->name('contactanos.store');
});

Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
