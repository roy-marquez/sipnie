<?php

namespace App\Http\Controllers\Modulos\Inventario;

use App\Http\Controllers\Controller;

use App\models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller
{
    public function index(){
//        $categorias = Categoria::all();
        $categorias = Categoria::with('subcategorias')->get();
        return view('modulos.inventario.categorias.index', compact('categorias'));
    }
}
