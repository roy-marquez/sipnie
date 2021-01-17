<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //Colocar zeros a la izquierda en campo items_num
    public function getItem_numAttribute()
    {
        return str_pad($this->item_num,6, '0', STR_PAD_LEFT);
    }

    public function categoria()
    {
        return $this->belongsTo(Categoria::class );
    }

    public function colegio()
    {
        return $this->belongsTo(Colegio::class);
    }
}