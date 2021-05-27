<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    protected $table = "habildades_personas";

    protected $fillable = [
        'nombres',
        'porcentajes',
        'orden'

    ];

      /** Relaciónes que existen 1 */
      public function persona(){
        return $this->belongsTo(Persona::class);
    }

}
