<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Horario extends Model
{
    public function colegios()
    {
        return $this->belongsToMany(Colegio::Class);
    }

    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::Class);
    }

    public function lecciones()
    {
        return $this->hasMany(Leccion::Class);
    }



}
