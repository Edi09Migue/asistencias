<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PersonasSeeder::class,
            AsistenciasPersonalSeeder::class,
            HabilidadesSeeder::class,
            CapacitacionSeeder::class

        ]);
     
        // \App\Models\User::factory(10)->create();
    }
}
