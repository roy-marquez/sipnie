<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EstadoUsuario extends Model
{
    //
    protected $table = 'estado_usuarios';

    public function users()
    {
        return $this->hasMany(User::Class);
    }
}
