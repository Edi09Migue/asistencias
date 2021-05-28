<?php

namespace App\Http\Controllers;

use App\Models\Habilidad;
use App\Models\Persona;
use Illuminate\Http\Request;

class Habilidades extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $habilidades = Habilidad::all(); 
        return view('habilidades.listado',[
        'habilidades'=> $habilidades
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::select('id','nombres','apellidos')->get();
        return view('habilidades.create',[
        'personas' => $personas
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $habilidad = Habilidad::create($request->all());
        return response()->json($habilidad);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function show(Habilidad $habilidad)
    {
        return response()->json($habilidad);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function edit(Habilidad $habilidad)
    {
        return view('habilidades.edit', [
            'habilidad' => $habilidad

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Habilidad $habilidad)
    {
        $habilidad->fill($request->all());
        $habilidad->save();

    return redirect()->route('habilidades.index');
    //return response()->json($persona);
    }

    /**
     * Remove the specified resource from storage.
     *Cambio
     * @param  \App\Models\Habilidad  $habilidad
     * @return \Illuminate\Http\Response
     */
    public function destroy(Habilidad $habilidad)
    {
        //
    }
}
