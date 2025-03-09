<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class InscripcionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('inscripciones')->insert([
            ['fecha_inscripcion' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['fecha_inscripcion' => now(), 'created_at' => now(), 'updated_at' => now()],
            ['fecha_inscripcion' => now(), 'created_at' => now(), 'updated_at' => now()],
        ]);
    }
}
