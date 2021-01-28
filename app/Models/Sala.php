<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sala extends Model
{
    //

    public function colegio()
    {
        return $this->belongsTo(Colegio::Class);
    }

    public function reservasSalas()
    {
        return $this->hasMany(ReservaSala::Class);
    }
}
