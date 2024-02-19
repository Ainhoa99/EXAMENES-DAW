<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profesor>
 */
class ProfesorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nombre_apellido' => $this->faker->firstName() . ' ' . $this->faker->lastName(),
            'tel' => $this->faker->phoneNumber(),
            'profesion' => $this->faker->randomElement(['profesion 1', 'profesion 2', 'profesion 3']),
            'grado_academico' => $this->faker->randomElement(['grado 1', 'grado 2', 'grado 3']),
        ];
    }
}
