<?php

namespace Database\Seeders;

use App\Models\Habilidad;
use Illuminate\Database\Seeder;

class HabilidadesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //Manera de crear una persona 
    $habilidadPersona = new Habilidad();
    $habilidadPersona->nombres = "Php";
    $habilidadPersona->porcentajes = "60";
    $habilidadPersona->orden = "1";
    $habilidadPersona->save();
    
    //crear 100 personas ramdomicas
    Habilidad::factory()
            ->times(100)
            ->create([]);

    //crear 100 personas ramdomicas
    Habilidad::factory()
    ->times(10)
    ->create([
        'porcentajes' => 50
    ]);
    }
}
