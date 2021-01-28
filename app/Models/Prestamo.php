<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prestamo extends Model
{
    public function reservasActivos()
    {
        return $this->belongsToMany(ReservaActivo::Class);
    }

    public function colegio()
    {
        return $this->belongsTo(Colegio::Class);
    }

    public function estadoPrestamo()
    {
        return $this->belongsTo(EstadoPrestamo::Class);
    }
}
