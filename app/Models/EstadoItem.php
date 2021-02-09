<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoItem extends Model
{
    protected $table = 'estado_items';

    public $timestamps = false;

    public function items()
    {
        return $this->hasMany(Item::Class);
    }
}
