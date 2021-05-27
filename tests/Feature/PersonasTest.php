<?php

namespace Tests\Feature;

use App\Models\AsistenciaPersonal;
use App\Models\Persona;
use Database\Seeders\PersonasSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PersonasTest extends TestCase
{
    //ingresamoso base de datos
    use DatabaseMigrations;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_seeder()
    {
        //cooro el seerder
        $this->seed(PersonasSeeder::class);

        //Cuento el numero de personas en la base de datos
        $personas = Persona::count();

        //Verifica los 111 personas  
        $this->assertEquals( $personas,111);
      

      
    }

    public function test_asistencias_personas(){
        //Creo una persona con el factory persona
        $persona = Persona::factory()->create([]);
          //Creo una persona con el factory de asistencias
        AsistenciaPersonal::factory()->times(2)->create([
            'persona_id' =>  $persona ->  id

        ]);
        //Obtengo el numero de asistencia de la persona , asistencia de personas estar pilas 
        $n_asistencia = $persona->asistencias->count();
        //Verifico si hay 2 asistencias 
        $this->assertEquals($n_asistencia,2);


    }
}
