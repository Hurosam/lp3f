<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProyectoController;
use App\Http\Controllers\TareaController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ComentarioController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//PREGUNTA 3 - Implementar sistema de autentificacion - LARAVELUI IMPLEMENTADO - FINALIZADO
//PREGUNTA 4 - implementar Preyecto y Tareas - FINALIZADO

Route::get("/Registro/Proyecto",[ProyectoController::class,"ingresa"]);
Route::post("/Registro/Proyecto",[ProyectoController::class,"registrar"]);
//PREGUNTA 7 - Eliminar un proyecto -- FINZALIZADO
Route::get("/Eliminar/Proyecto/{id}",[ProyectoController::class,"eliminar"]);
// --
Route::get("/Actualizar/Proyecto/{id}/{NombreProyecto}",[ProyectoController::class,"actualiza"]);
Route::get("/Lista/Proyecto",[ProyectoController::class,"lista"]);

//Tareas
Route::get("/Registro/Tareas",[TareaController::class,"ingresa"]);
Route::post("/Registro/Tareas",[TareaController::class,"registrar"]);
Route::get("/Eliminar/Tareas/{id}",[TareaController::class,"eliminar"]);
//PREGUNTA 6 - modificar una tarea -- EN PROCESO
Route::get("/Actualizar/Tareas/{id}/{NombreTarea}",[TareaController::class,"actualiza"]);
//----------------------------------------------------------
Route::get("/Lista/Tareas",[TareaController::class,"lista"]);
//----------------------------------------------------
//PREGUNTA 5 -- generar 10 comentarios con seaders o factories -- EN PROCESO
//Comentarios
Route::get("/Registro/Comentarios",[ComentarioController::class,"ingresa"]);
Route::post("/Registro/Comentarios",[ComentarioController::class,"registrar"]);
Route::get("/Eliminar/Comentarios/{id}",[ComentarioController::class,"eliminar"]);
Route::get("/Actualizar/Comentarios/{id}/{NombreCom}",[ComentarioController::class,"actualiza"]);
Route::get("/Lista/Comentarios",[ComentarioController::class,"lista"]);

//Usuarios
Route::get("/Registro/Usuarios",[UsuarioController::class,"ingresa"]);
Route::post("/Registro/Usuarios",[UsuarioController::class,"registrar"]);
Route::get("/Eliminar/Usuarios/{id}",[UsuarioController::class,"eliminar"]);
Route::get("/Actualizar/Usuarios/{id}/{nombre}",[UsuarioController::class,"actualiza"]);
Route::get("/Lista/Usuarios",[UsuarioController::class,"lista"]);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

