<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    use HasFactory;

    protected $table = "alumnos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre_apellido', 'edad', 'tel', 'dir', 'foto'];
    protected $hidden = ['id'];

    public function cursos()
    {
        return $this->belongsToMany(Curso::class, 'alumno_curso');
    }
}
