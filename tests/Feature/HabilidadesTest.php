<?php

namespace Tests\Feature;


use App\Models\Habilidad;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use Tests\TestCase;

class HabilidadesTest extends TestCase
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
        $this->seed(HabilidadesSeeder::class);

        //Cuento el numero de habilidades
        $habilidades = Habilidad::count();

        //Verifica los 111 personas  
        $this->assertEquals($habilidades,111);
      

      
    }

}
