<?php
namespace Database\Factories;

use App\Models\Curso;
use App\Models\Grupo;
use App\Models\Material;
use App\Models\Inscripcion;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class CursoFactory extends Factory
{
    protected $model = Curso::class;

    public function definition()
    {
        return [
            'nombre' => $this->faker->word(),
            'contenido' => $this->faker->text(),
            'robotics_kit' => $this->faker->word(),
            'portada' => $this->faker->imageUrl(),
            'grupo_id' => Grupo::all()->random()->id,
            'material_id' => Material::all()->random()->id,
            'inscripcion_id' => Inscripcion::all()->random()->id,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
