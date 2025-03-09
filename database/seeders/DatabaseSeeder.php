<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\Curso::factory(100)->create();
        $this->call([

            //RoboticsKitsSeed ::class,
            //InscripcionSeeder::class,
           // RolesSeeder::class,
            //GruposSeeder::class,
            //UsersSeeder::class,
        
        ]);      //hola
          
    }
}
