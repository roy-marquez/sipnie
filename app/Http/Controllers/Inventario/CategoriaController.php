<?php

namespace App\Http\Controllers\Inventario;

use App\Http\Controllers\Controller;

use App\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function categorias(){
        $categorias = Categoria::all();
        return view('modulos.inventario.categorias', compact('categorias'));
    }
}
