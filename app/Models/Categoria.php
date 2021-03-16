<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //asociar modelo Categoria con la tabla 'categorias'
    protected $table = 'categorias';

    public $timestamps = false;

    public function items()
    {
        return $this->hasManyThrough(Item::Class, Subcategoria::Class);
    }

    public function modelos()
    {
        return $this->hasManyThrough(Modelo::Class, Subcategoria::Class);
    }

    public function subcategorias()
    {
        return $this->hasMany(Subcategoria::Class);
    }

}
