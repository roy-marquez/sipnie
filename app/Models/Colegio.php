<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    //asociar modelo Colegio con la tabla 'colegios'
    protected $table = 'colegios';

    protected $fillable = ['nombre', 'codigo', 'estado_colegio_id'];

    public function getRouteKeyName()
    {
        return 'codigo';
    }


}
