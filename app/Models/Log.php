<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Log extends Model
{
    public function operacion()
    {
        return $this->belongsTo(Operacion::Class);
    }

    public function user()
    {
        return $this->belongsTo(User::Class);
    }
}
