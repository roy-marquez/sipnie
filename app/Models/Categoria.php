<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    //asociar modelo Categoria con la tabla 'categorias'
    protected $table = 'categorias';

    public function items()
    {
        return $this->hasMany(Item::Class);
    }
}
