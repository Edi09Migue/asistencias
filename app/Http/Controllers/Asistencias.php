<?php

namespace App\Http\Controllers;

use App\Models\AsistenciaPersonal;
use App\Models\Persona;
use Database\Seeders\AsistenciasPersonalSeeder;
use Illuminate\Http\Request;

class Asistencias extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $asistenciaPersonal = AsistenciaPersonal::all(); 
        return response()->json($asistenciaPersonal);

        //return view('personas.listado',[
    
        //'asistencias'=> $asistenciaPersonal
        //]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AsistenciaPersonal  $asistenciaPersonal
     * @return \Illuminate\Http\Response
     */
    public function show(AsistenciaPersonal $asistenciaPersonal)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AsistenciaPersonal  $asistenciaPersonal
     * @return \Illuminate\Http\Response
     */
    public function edit(AsistenciaPersonal $asistenciaPersonal)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AsistenciaPersonal  $asistenciaPersonal
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AsistenciaPersonal $asistenciaPersonal)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AsistenciaPersonal  $asistenciaPersonal
     * @return \Illuminate\Http\Response
     */
    public function destroy(AsistenciaPersonal $asistenciaPersonal)
    {
        //
    }
}
