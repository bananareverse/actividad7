<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Curso extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'contenido', 'robotics_kit', 'portada', 'grupo_id'];

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }

    public function materiales()
    {
        return $this->hasMany(Material::class, 'curso_id');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'curso_id');
    }
}

