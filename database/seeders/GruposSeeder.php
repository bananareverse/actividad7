<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class GruposSeeder extends Seeder
{
    public function run()
    {
        DB::table('grupos')->insert([
            ['nombre' => 'Principiante', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Intermedio', 'created_at' => now(), 'updated_at' => now()],
            ['nombre' => 'Avanzado', 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}

