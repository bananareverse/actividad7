<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run()
    {
        DB::table('usuarios')->insert([
            [
                'nombre' => 'Admon',
                'email' => 'admon@robotics.com',
                'contrasena' => ('Adm@2022'),
                'role_id' => 3, // Admin
                'grupo_id' => 1, // Principiante
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Tecmilenio',
                'email' => 'tecmilenio@robotics.com',
                'contrasena' => ('Adm@2022'),
                'role_id' => 2, // Docente
                'grupo_id' => 2, // Intermedio
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nombre' => 'Student',
                'email' => 'student@robotics.com',
                'contrasena' => ('Adm@2022'),
                'role_id' => 1, // Estudiante
                'grupo_id' => 3, // Avanzado
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

