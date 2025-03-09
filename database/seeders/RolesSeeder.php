<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    public function run()
    {
        DB::table('roles')->insert([
            ['nombre' => 'Estudiante', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Docente', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Administrativo', 'created_at' => now(), 'updated_at' => now()],
        ]);
        
    }
}



