<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReporteInterno extends Model
{
    //
    protected $table = 'reportes_internos';

    public function colegio()
    {
        return $this->belongsTo(Colegio::Class);
    }

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function reporteInternoTipo()
    {
        return $this->belongsTo(ReporteInternoTipo::Class);
    }
}
