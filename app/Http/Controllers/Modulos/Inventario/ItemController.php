<?php

namespace App\Http\Controllers\Modulos\Inventario;

use App\Http\Controllers\Controller;
use App\Models\Colegio;
use App\Models\Categoria;
use App\Models\EstadoItem;
use App\Models\Marca;
use App\Models\Modelo;
use App\Models\Subcategoria;
use App\Models\Adquisicion;
use App\Models\Condicion;
use App\Models\Uso;
use App\Models\Ubicacion;
use Illuminate\Http\Request;
use App\Models\Item;
use App\Http\Requests\Inventario\StoreItemRequest;

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

    public function create()
    {
        $item = new Item;
        $colegios = Colegio::all()->sortBy('nombre');
        $categorias = Categoria::all()->sortBy('nombre');
        $subcategorias = Subcategoria::all()->sortBy('nombre');
        $marcas = Marca::all();
        $modelos = Modelo::all()->sortBy('nombre');
        $adquisiciones = Adquisicion::all();
        $estado_items = EstadoItem::all();
        $condiciones = Condicion::all();
        $usos = Uso::all();
        $ubicaciones = Ubicacion::all()->sortBy('nombre');

        return view('modulos.inventario.items.create',
            compact('item', 'modelos','colegios', 'categorias','subcategorias',
                'marcas','adquisiciones', 'estado_items', 'condiciones', 'usos', 'ubicaciones' ));
    }

    public function store(StoreItemRequest $request)
    {
//        dd($request);
        Item::create($request->validated());
        return redirect()->route('items.index')
            ->with('status', 'El item fue creado con éxito');
    }

}
