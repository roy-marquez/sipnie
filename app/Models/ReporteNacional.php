<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ReporteNacional extends Model
{
    //
    protected $table = 'reporte_nacionales';

    public function user()
    {
        return $this->belongsTo(User::Class);
    }

    public function reporteNacionalTipo()
    {
        return $this->belongsTo(ReporteNacionalTipo::Class);
    }
}
