<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    //
    protected $table = 'ubicaciones';

    public function colegio(){
        return $this->belongsTo(Colegio::Class);
    }

    public function items(){
        return $this->hasMany(Item::Class);
    }
}
