<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoboticsKitsSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('materiales')->insert([
            [
                'titulo' => 'Introduction to Robotics',
                'archivo' => 'StarterKit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => '	Introduction to Automation',
                'archivo' => 'StarterKit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Programming for Robotics',
                'archivo' => 'Education Robotics Kit',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'titulo' => 'Characteristics of a Robot',
                'archivo' => 'Kit5',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
