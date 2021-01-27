<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoReserva extends Model
{
    protected $table = 'estado_reservas';

    public function reservasActivos()
    {
        return $this->hasMany(ReservaActivo::Class);
    }

    public function reservasSalas()
    {
        return $this->hasMany(ReservaSala::Class);
    }

    public function prestamos()
    {
        return $this->hasManyThrough(Prestamos::Class, ReservaActivo::Class);
    }
}
