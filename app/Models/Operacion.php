<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Operacion extends Model
{
    protected $table = 'operaciones';

    public function logs(){
        return $this->hasMany(Log::Class);
    }
}
