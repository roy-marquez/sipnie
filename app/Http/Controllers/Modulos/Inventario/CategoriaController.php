<?php

namespace App\Http\Controllers\Modulos\Inventario;

use App\Http\Controllers\Controller;

use App\models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categorias(){
        $categorias = Categoria::all();
        return view('modulos.inventario.categorias', compact('categorias'));
    }
}
