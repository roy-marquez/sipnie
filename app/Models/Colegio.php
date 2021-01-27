<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Colegio extends Model
{
    //asociar modelo Colegio con la tabla 'colegios'
    protected $table = 'colegios';

    protected $fillable = ['nombre', 'codigo', 'estado_colegio_id'];

    public function getRouteKeyName()
    {
        return 'codigo';
    }

    public function estadoColegio()
    {
        return $this->belongsTo(EstadoColegio::Class);
    }

    public function clasificacion()
    {
        return $this->belongsTo(Clasificacion::Class);
    }

    public function conectividad()
    {
        return $this->belongsTo(Conectividad::Class);
    }

    public function provincia()
    {
        return $this->belongsTo(Provincia::Class);
    }

    public function canton()
    {
        return $this->belongsTo(Canton::Class);
    }

    public function distrito()
    {
        return $this->belongsTo(Distrito::Class);
    }

    public function prestamos()
    {
        return $this->hasMany(Prestamo::Class);
    }

    public function reportesInternos()
    {
        return $this->hasMany(ReporteInterno::Class);
    }

    public function users()
    {
        return $this->hasMany(User::Class);
    }

    public function usuariosPorReporte()
    {
        return $this->hasManyThrough(User::Class, ReporteInterno::Class);
    }

    public function reservasActivos()
    {
        return $this->hasMany(ReservaActivo::Class);
    }

    public function materias()
    {
        return $this->hasMany(Materia::class);
    }

    public function salas()
    {
        return $this->hasMany(Sala::class);
    }

    public function reservasSalas()
    {
        return $this->hasManyThrough(ReservaSala::Class, Sala::Class);
    }

    public function items()
    {
        return $this->hasMany(Item::Class);
    }

    public function ubicaciones()
    {
        return $this->hasMany(Ubicacion::Class);
    }

    public function itemsPorUbicacion(){
        return $this->hasManyThrough(Item::Class, Ubicacion::Class);
    }

    public function lecciones()
    {
        return $this->hasMany(Leccion::Class);
    }

    public function horarios(){
        return $this->hasManyThrough(Horario::Class, Clasificacion::Class);
    }
}
