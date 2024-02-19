<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juego extends Model
{
    use HasFactory;

    protected $table = "juegos";
    protected $primaryKey = "id";
    protected $fillable = [
        'titulo',
         'year',
         'studio',
         'poster',
         'synopsis',
         'id_categoria'
    ];
    protected $hidden = ['id'];

    public function categoria()
    {
        return $this->belongsTo(Categoria::class, 'foreign_key');
    }
}
