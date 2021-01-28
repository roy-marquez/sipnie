<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaActivoDetalle extends Model
{
    protected $table = 'reservas_activos_detalles';
    //

    public function reservaActivo()
    {
        return $this->belongsTo(ReservaActivo::Class);
    }

    public function leccion()
    {
        return $this->belongsTo(Leccion::Class);
    }

    public function item()
    {
        return $this->belongsTo(Item::Class);
    }

}
