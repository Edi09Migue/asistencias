<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;

    protected $table = "personas";

    protected $fillable = [
        'nombres',
        'apellidos',
        'cedula',
        'edad'

    ];

    /** Relaciónes que existen */
    public function asistencias(){
        return $this->hasMany(AsistenciaPersonal::class);
    }
}
