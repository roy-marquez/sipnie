<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //Colocar zeros a la izquierda en campo items_num
    public function getItem_numAttribute()
    {
        return str_pad($this->item_num,6, '0', STR_PAD_LEFT);
    }

    public function modelo()
    {
        return $this->belongsTo(Modelo::Class);
    }

    //RELACION "belongsToThrough"
    public function marca(){
        return $this->modelo->belongsTo(Marca::Class);
    }

    public function subcategoria()
    {
        return $this->belongsTo(Subcategoria::Class);
    }

    //RELACION "belongsToThrough"
    public function categoria(){
        return $this->subcategoria->belongsTo(Categoria::Class);
    }

    public function condicion()
    {
        return $this->belongsTo(Condicion::Class);
    }

    public function adquisicion()
    {
        return $this->belongsTo(Adquisicion::Class);
    }

    public function estadoItem()
    {
        return $this->belongsTo(EstadoItem::Class);
    }

    public function colegio()
    {
        return $this->belongsTo(Colegio::class);
    }

    public function uso()
    {
        return $this->belongsTo(Uso::Class);
    }

    public function ubicacion()
    {
        return $this->belongsTo(Ubicacion::Class);
    }

    public function reservasActivos()
    {
        return $this->hasManyThrough(ReservaActivo::Class, ReservaActivoDetalle::Class);
    }

}
