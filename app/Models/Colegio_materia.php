<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colegio_materia extends Model
    {
        //asociar modelo Colegio_materia con la tabla 'colegios_materias'
        //esta es una tabla pivote
        protected $table = 'colegios_materias';
    }
