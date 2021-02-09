<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoPrestamo extends Model
{
    protected $table = 'estado_prestamos';

    public $timestamps = false;

    public function prestamos()
    {
        return $this->hasMany(Prestamo::Class);
    }
}
