<?php

namespace Database\Factories;

use App\Models\Profesor;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Curso>
 */
class CursoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre' => $this->faker->unique()->regexify('[A-Z][a-z]{5}'),
            'nivel' => $this->faker->randomElement(range(1, 4)),
            'horas' => $this->faker->randomElement(range(100, 250)),
            'id_profesor' => $this->faker->unique()->numberBetween(1, Profesor::count())
        ];
    }
}
