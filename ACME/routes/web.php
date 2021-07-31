<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropietarioController;
use App\Http\Controllers\VehiculoController;
use App\Http\Controllers\ReporteController;

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

Route::get('/', function () {return view('modulos.index.index');});



//CONDUCTORES
Route::get('conductores', [PropietarioController::class, 'index'])->name('conductores.index');
Route::get('conductores/create', [PropietarioController::class, 'create'])->name('conductores.crear');
Route::post('conductores', [PropietarioController::class, 'store'])->name('conductores.guardar');
Route::get('conductores/edit/{id}', [PropietarioController::class, 'edit'])->name('conductores.editar');
Route::put('conductores/{id}', [PropietarioController::class, 'update'])->name('conductores.actualizar');
Route::get('conductores/show/{id}', [PropietarioController::class, 'show'])->name('conductores.mostrar');
Route::delete('conductores/{id}', [PropietarioController::class, 'delete'])->name('conductores.eliminar');


//PROPIETARIOS
Route::get('propietarios', [PropietarioController::class, 'index'])->name('propietarios.index');
Route::get('propietarios/create', [PropietarioController::class, 'create'])->name('propietarios.crear');
Route::post('propietarios', [PropietarioController::class, 'store'])->name('propietarios.guardar');
Route::get('propietarios/edit/{id}', [PropietarioController::class, 'edit'])->name('propietarios.editar');
Route::put('propietarios/{id}', [PropietarioController::class, 'update'])->name('propietarios.actualizar');
Route::get('propietarios/show/{id}', [PropietarioController::class, 'show'])->name('propietarios.mostrar');
Route::delete('propietarios/{id}', [PropietarioController::class, 'delete'])->name('propietarios.eliminar');

//VEHICULOS
Route::get('vehiculos', [VehiculoController::class, 'index'])->name('vehiculos.index');
Route::get('vehiculos/create', [PropietarioController::class, 'create'])->name('propietarios.crear');
Route::post('vehiculos', [VehiculoController::class, 'store'])->name('vehiculos.guardar');
Route::get('vehiculos/edit/{id}', [VehiculoController::class, 'edit'])->name('vehiculos.editar');
Route::put('vehiculos/{id}', [VehiculoController::class, 'update'])->name('vehiculos.actualizar');
Route::get('vehiculos/show/{id}', [VehiculoController::class, 'show'])->name('vehiculos.mostrar');
Route::delete('vehiculos/{id}', [VehiculoController::class, 'delete'])->name('vehiculos.eliminar');

//REPORTE
Route::get('reportes',[ReporteController::class,'reporte'])->name('reporte.index');
