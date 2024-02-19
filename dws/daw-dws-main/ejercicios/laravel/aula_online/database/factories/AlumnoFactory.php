<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Alumno>
 */
class AlumnoFactory extends Factory
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
            'edad' => $this->faker->randomElement(range(12, 18)),
            'tel' => $this->faker->phoneNumber(),
            'dir' => $this->faker->address(),
            'foto' => 'https://api.lorem.space/image/face?w=600&h=600&key=' . $this->faker->regexify('[A-Za-z0-9]{20}')
        ];
    }
}
