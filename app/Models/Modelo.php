<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //asociar modelo Modelo con la tabla 'modelos'
    protected $table = 'modelos';

    public function marca()
    {
        return $this->belongsTo(Marca::Class);
    }

    public function items()
    {
        return $this->hasMany(Item::Class);
    }
}
