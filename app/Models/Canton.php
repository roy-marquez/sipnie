<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Canton extends Model
{
    //asociar modelo Canton con la tabla 'cantones'
    protected $table = 'cantones';

    public $timestamps = false;

    public function provincia(){
        return $this->belongsTo(Provincia::Class );
    }

    public function distritos(){
        return $this->hasMany(Distrito::Class);
    }

    public function colegios(){
        return $this->hasManyThrough(Colegio::Class, Distrito::Class);
    }


}
