<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoColegio extends Model
{
    protected $table = 'estado_colegios';

    public $timestamps = false;

    public function colegios(){
        return $this->hasMany(EstadoColegio::Class);
    }
}
