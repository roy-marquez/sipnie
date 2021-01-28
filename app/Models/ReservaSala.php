<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaSala extends Model
{
    //
    protected $table = 'reservas_salas';

    public function solicitante()
    {
        return $this->belongsTo(User::Class);
    }

    public function revisor()
    {
        return $this->belongsTo(User::Class);
    }

    public function estadoReserva()
    {
        return $this->belongsTo(EstadoReserva::Class);
    }

    public function sala()
    {
        return $this->belongsTo(Sala::Class);
    }

    public function materia()
    {
        return $this->belongsTo(Materia::Class);
    }

    public function Lecciones()
    {
        return $this->hasManyThrough(Leccion::Class, ReservaSalaLeccion::Class);
    }
}
