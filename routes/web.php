<?php

use App\Http\Controllers\Asistencias;
use App\Http\Controllers\Personas;
use App\Models\AsistenciaPersonal;
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

//Route::get('/', function () {
  //  return view('welcome');
//});

//Tipos de rutas:
//GET (Solicitar informacion)
//POST (Enviar o crear informacion )
//PUT (ENVIAR O ACTUALIZAR INFORMACIÓN)
//DELETE (Eliminar Información)

Route::get('/',function(){
    return "Hola desde rutas";
});

// Route::tipo ('ruta',[Controlador::class,'metodo']);
Route::get('/personas',[Personas::class,'index'])->name('personas.index');

Route::get('/personas/crear',[Personas::class,'create'])->name('personas.create');


// para obtener los datos formulario de edicion  
Route::get('/personas/{persona}/edit',[Personas::class,'edit'])->name('personas.edit');


Route::get('/personas/show/{persona}',[Personas::class,'show']);

Route::post('/personas',[Personas::class,'store'])-> name('personas.store');

//ruta para guar la persona update
Route::put('/personas/{persona}',[Personas::class,'update'])-> name('personas.update');


//Borrar 
Route::delete('/personas/{persona}',[Personas::class,'destroy'])-> name('personas.destroy');

//adicionales
Route::put('/personas/{persona}/desactivar',[Personas::class,'desactivar'])-> name('personas.desactivar');


//rutas para Asistencias
Route::get('/asistencias',[Asistencias::class,'index'])->name('asistencias.index');
Route::get('/asistencias/create',[Asistencias::class,'create'])->name('asistencias.create');
Route::get('/asistencias/{asistencia}/edit',[Asistencias::class,'edit'])->name('asistencias.edit');
Route::get('/asistencias/show/{asistencia}',[Asistencias::class,'show']);
Route::post('/asistencias',[Asistencias::class,'store'])-> name('asistencias.store');
Route::put('/asistencias/{asistencia}',[Asistencias::class,'update'])-> name('asistencias.update');


