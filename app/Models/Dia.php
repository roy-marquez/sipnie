<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Dia extends Model
{
    //asociar modelo Canton con la tabla 'dias'
    protected $table = 'dias';

    public function lecciones()
    {
        return $this->hasMany(Leccion::Class);
    }
}
