<?php

namespace Database\Seeders;

use App\Models\AsistenciaPersonal;
use Illuminate\Database\Seeder;

class AsistenciasPersonalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    //Manera de crear una persona 
    $AsistenciaPersonal = new AsistenciaPersonal();
    $AsistenciaPersonal->persona_id = "1";
    $AsistenciaPersonal->fecha_ingreso = "2021-05-26 20:08:02";
    $AsistenciaPersonal->fecha_salida = "2021-05-26 20:08:02";
    
    $AsistenciaPersonal->save();
    
    //crear 100 personas ramdomicas
    AsistenciaPersonal::factory()
            ->times(100)
            ->create([]);

    //crear 100 personas ramdomicas
    AsistenciaPersonal::factory()
    ->times(10)
    ->create([
    ]);
    }
}
