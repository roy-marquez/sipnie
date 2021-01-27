<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Conectividad extends Model
{
    //
    protected $table = 'conectividades';

    public function colegios()
    {
        return $this->hasMany(Colegio::Class);
    }
}
