<?php

namespace Database\Factories;

use App\Models\Curso;
use App\Models\Alumno;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\AlumnoCurso>
 */
class AlumnoCursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'id_alumno' => $this->faker->numberBetween(1, Alumno::count()),
            'id_curso' => $this->faker->numberBetween(1, Curso::count())
        ];
    }
}
