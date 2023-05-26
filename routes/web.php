<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;

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

Route::get('/crearPersona', function () {
    return view('formularioPersonas');
});

Route::post('/crearPersona',[PersonaController::class, "Insertar"]);

Route::get('/',[PersonaController::class, "Listar"]);
Route::get('/eliminarPersona/{d}', [PersonaController::class,'Eliminar']);
Route::get('/modificarPersona/{d}', [PersonaController::class,'CargarFormularioDeModificacion']);
Route::post('/modificarPersona',[PersonaController::class,"Modificar"]);