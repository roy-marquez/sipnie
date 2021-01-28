<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaActivo extends Model
{
    protected $table = 'reservas_activos';

    public function materia()
    {
        return $this->belongsTo(Materia::Class);
    }

    public function estadoReserva()
    {
        return $this->belongsTo(EstadoReserva::Class);
    }

    public function  colegio()
    {
        return $this->belongsTo(Colegio::Class);
    }

    public function revisor(){
        return $this->belongsTo(User::Class);
    }

    public function solicitante(){
        return $this->belongsTo(User::Class);
    }

    public function prestamo()
    {
        return $this->hasOne(Prestamo::Class);
    }

    public function reservaActivoDetalle()
    {
        return $this->hasMany(ReservaActivoDetalle::Class);
    }



}
