<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Adquisicion extends Model
{
    protected $table = 'adquisiciones';
    public $timestamps = false;

    public function items(){
        return $this->hasMany(Item::Class);
    }
}
