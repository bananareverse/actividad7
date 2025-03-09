<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'email', 'contrasena', 'role_id', 'grupo_id'];

    public function rol()
    {
        return $this->belongsTo(Rol::class, 'role_id');
    }

    public function grupo()
    {
        return $this->belongsTo(Grupo::class, 'grupo_id');
    }

    public function inscripciones()
    {
        return $this->hasMany(Inscripcion::class, 'user_id');
    }
}

