<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Distrito extends Model
{
    //asociar modelo Canton con la tabla 'dias'
    protected $table = 'distritos';

    public function canton()
    {
        return $this->belongsTo(Canton::Class);
    }

    public function colegios()
    {
        return $this->hasMany(Colegio::Class);
    }
}
