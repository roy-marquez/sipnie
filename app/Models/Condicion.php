<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Condicion extends Model
{
    //asociar modelo Condicion con la tabla 'condiciones'
    protected $table = 'condiciones';

    public $timestamps = false;

    public function items(){
        return $this->hasMany(Item::Class);
    }
}
