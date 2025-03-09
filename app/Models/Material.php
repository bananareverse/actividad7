<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Material extends Model
{
    use HasFactory;
    protected $table = 'materiales';

    protected $fillable = ['titulo', 'archivo', 'curso_id'];

}



