<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Seeder;

class PersonasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Manera de crear una persona 
        $persona = new Persona();
        $persona->nombres = "Edisson";
        $persona->apellidos = "Ibarra";
        $persona->cedula = "1804719373";
        $persona->edad = "26";
        $persona->email = "edi09migue@gmail.com";
        $persona->save();
        
        //crear 100 personas ramdomicas
        Persona::factory()
                ->times(100)
                ->create([]);

        //crear 100 personas ramdomicas
        Persona::factory()
        ->times(10)
        ->create([
            'edad' => 18
        ]);
    
    }
}
