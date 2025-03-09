<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Inscripcion extends Model
{
    use HasFactory;
    protected $table = 'inscripciones';

    protected $fillable = ['fecha_inscripcion', 'user_id', 'curso_id'];

}

