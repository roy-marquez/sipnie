<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TipoDocIdentidad extends Model
{
    //
    protected $table = 'tipos_doc_identidad';

    public function tiposDocId()
    {
        return $this->hasMany(User::Class);
    }
}
