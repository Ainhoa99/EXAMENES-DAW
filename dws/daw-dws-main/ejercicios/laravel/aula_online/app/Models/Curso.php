<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Curso extends Model
{
    use HasFactory;

    protected $table = "cursos";
    protected $primaryKey = "id";
    protected $fillable = ['nombre', 'nivel', 'horas', 'id_profesor'];
    protected $hidden = ['id'];

    public function profesor()
    {
        return $this->belongsTo(Profesor::class, 'foreign_key');
    }

    public function alumnos()
    {
        return $this->belongsToMany(Alumno::class, 'alumno_curso');
    }
}
