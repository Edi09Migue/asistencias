<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Capacitacion extends Model
{
    use HasFactory;

    protected $table = "capacitaciones";
    protected $filltable = [
        'persona_id',
        'fecha',
        'nombre',
        'horas',
        'lugar',
        'institucion'

    ];

    //relacion persona a la que pertenece esta capacitacion
    public function persona(){
        return $this->belongsTo(Persona::class);
    }
}
