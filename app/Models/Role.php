<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{

    public function permisos(){
        return $this->hasMany(Permiso::Class);
    }

    public function users()
    {
        return $this->hasMany(User::Class);
    }
}
