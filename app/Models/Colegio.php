<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    //asociar modelo Colegio con la tabla 'colegios'
    protected $table = 'colegios';

    public function getRouteKeyName()
    {
        return 'codigo';
    }
}
