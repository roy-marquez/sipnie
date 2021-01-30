<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subcategoria extends Model
{
    public function categoria()
    {
        return $this->belongsTo(Categoria::Class);
    }

    public function items(){
        return $this->hasMany(Item::Class);
    }

    public function modelos(){
        return $this->hasMany(Modelo::Class);
    }
}
