<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clasificacion extends Model
{
    //asociar modelo Clasificación con la tabla 'clasificaciones'
    protected $table = 'clasificaciones';

    public $timestamps = false;

    public function colegios(){
        return $this->hasMany(Colegio::class);
    }

    public function horarios(){
        return $this->hasMany(Colegio::class);
    }

}
