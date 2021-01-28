<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReservaSalaLeccion extends Model
{
    //
    protected $table = 'reservas_salas_lecciones';

    public function reservaSala()
    {
        return $this->belongsTo(ReservaSala::Class);
    }

    public function leccion(){
        return $this->belongsTo(Leccion::Class);
    }


}
