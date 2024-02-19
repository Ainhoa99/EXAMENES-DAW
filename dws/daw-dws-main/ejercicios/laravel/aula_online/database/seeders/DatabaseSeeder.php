<?php

namespace Database\Seeders;

use App\Models\Curso;
use App\Models\Alumno;
use App\Models\Profesor;
use App\Models\AlumnoCurso;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Alumno::factory(200)->create();
        Profesor::factory(25)->create();
        Curso::factory(25)->create();
        AlumnoCurso::factory(600)->create();
    }
}
