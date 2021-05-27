<?php

use App\Http\Controllers\Personas;
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
Route::get('/team',[Personas::class,'index'])->name('personas.index');

Route::get('/team/crear',[Personas::class,'create'])->name('personas.create');


// para obtener los datos formulario de edicion  
Route::get('/team/{persona}/edit',[Personas::class,'edit'])->name('personas.edit');


Route::get('/team/show/{persona}',[Personas::class,'show']);

Route::post('/team',[Personas::class,'store'])-> name('personas.store');

//ruta para guar la persona update
Route::put('/team/{persona}',[Personas::class,'update'])-> name('personas.update');

//adicionales

Route::put('/team/{persona}/desactivar',[Personas::class,'desactivar'])-> name('personas.desactivar');



