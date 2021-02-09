<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Modelo extends Model
{
    //asociar modelo Modelo con la tabla 'modelos'
    protected $table = 'modelos';

    protected $fillable= ['subcategoria_id', 'marca_id', 'nombre', 'descripcion'];

    public function marca()
    {
        return $this->belongsTo(Marca::Class);
    }

    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::Class);
    }

    public function categoria()
    {
        return $this->subcategoria->belongsTo(Categoria::Class);
    }

    public function items()
    {
        return $this->hasMany(Item::Class);
    }
}
