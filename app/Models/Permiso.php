<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Permiso extends Model
{
    protected $table = 'permisos';

    public function roles()
    {
        return $this->belongsToMany(Role::Class);
    }

}
