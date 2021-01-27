<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //asociar modelo Materia con la tabla 'materias'
    protected $table = 'materias';

    public function colegios()
    {
        return $this->belongsToMany(Colegio::Class);
    }

    public function reservasActivos()
    {
        return $this->hasMany(ReservaActivo::Class);
    }

    public function reservasSalas()
    {
        return $this->hasMany(ReservaSala::Class);
    }
}
