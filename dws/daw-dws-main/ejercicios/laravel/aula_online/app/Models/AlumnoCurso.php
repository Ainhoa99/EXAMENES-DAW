<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AlumnoCurso extends Model
{
    use HasFactory;

    protected $table = "alumno_curso";
    protected $primaryKey = ['id_alumno', 'id_curso'];
    protected $fillable = ['id_alumno', 'id_curso'];
    public $incrementing = false;
}
