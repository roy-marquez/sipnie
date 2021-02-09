<?php

namespace App\Http\Controllers\Modulos\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Item;

class ItemController extends Controller
{
    /**
     * Despliega la lista de colegios.
     *
     */
    public function index()
    {
        $items = Item::with(['colegio', 'subcategoria', 'subcategorias.categoria', 'modelo', 'modelo.marca',
            'adquisicion', 'estadoItem', 'condicion', 'uso', 'ubicacion'])->get();
//        $items = Item::all()->sortByDesc('updated_at');
        return view('modulos.inventario.items.index', [
            'items' => $items
        ]);
    }
}
