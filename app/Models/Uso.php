<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Uso extends Model
{
    public function items()
    {
        return $this->hasMany(Item::Class);
    }
}
