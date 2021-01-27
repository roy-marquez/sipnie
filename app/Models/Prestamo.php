<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    public function reservasActivos()
    {
        return $this->belongsToMany(ReservaActivo::Class);
    }
}
