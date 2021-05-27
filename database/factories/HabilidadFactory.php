<?php

namespace Database\Factories;

use App\Models\Habilidad;
use Illuminate\Database\Eloquent\Factories\Factory;

class HabilidadFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Habilidad::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
       
        return [
            'nombres' => $this->faker->randomElement($array = array ('Java',' C#','NodeJS')), 
            'porcentajes' => rand(1,100),
            'orden' => rand(1,10)
   
           ];
    }

}
