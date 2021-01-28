<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provincia extends Model
{
    public function cantones()
    {
        return $this->hasMany(Canton::Class);
    }

    public function colegios()
    {
        return $this->hasMany(Colegio::Class);
    }
}
