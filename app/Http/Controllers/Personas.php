<?php

namespace App\Http\Controllers;

use App\Http\Requests\PersonaStoreRequest;
use App\Models\Persona;
use Illuminate\Http\Request;

class Personas extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //listar 
        $personas = Persona::all(); // Select * from 'Persona'
        //return response()->json($personas);
        return view('personas.listado',[
            //varios valores al array 
        'personas'=> $personas
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //Llmaar a las vistas 

        return view('personas.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     //aqui especificamos el request para guardar los datos 
    public function store(PersonaStoreRequest $request)
    {
        //dd($request->all());
        $persona = Persona::create($request->all());

        //Esta linea hace lo mismo de arriba 
        //$persona = new Persona($request->all());
        //$persona->save();

        //Lllega el formulario hasta aqui y crea un array en base al formulario 
        //retorna la persona que creamos
        return redirect()-> route('personas.index')->with('success','Usuario creado correctamente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function show(Persona $persona)
    { 
        return response()->json($persona);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function edit(Persona $persona)
    {
        
        return view('personas.edit', [
            'persona' => $persona

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Persona $persona)
    {
        // verificar si llega dd
    //dd($request->all());
    //actualiza el modelo persona 
    //con los nuevos datos del request 
    $persona->fill($request->all());
    $persona->save();

    return redirect()->route('personas.index');
    //return response()->json($persona);



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Persona  $persona
     * @return \Illuminate\Http\Response
     */
    public function destroy(Persona $persona)
    {
        $persona->delete();
        return redirect()->route('personas.index');
    }

    public function desactivar(Persona $persona)
    {
        //
    }
}
