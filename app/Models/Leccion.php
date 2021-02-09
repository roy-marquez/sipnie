<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leccion extends Model
{
    //asociar modelo Leccion con la tabla 'lecciones'
    protected $table = 'lecciones';

    public $timestamps = false;

    public function horario()
    {
       return $this->belongsTo(Horario::Class);
    }

    public function dia()
    {
        return $this->belongsTo(Dia::Class);
    }

    public function reservaActivoDetalles()
    {
        return $this->hasMany(ReservaActivoDetalle::Class);
    }

    public function reservaSalaLecciones()
    {
        return $this->hasMany(ReservaSalaLeccion::Class);
    }

}
