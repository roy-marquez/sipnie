<?php

namespace App\Http\Controllers\Modulos\Inventario;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Modelo;
use App\Models\Marca;
use App\Models\Subcategoria;
use App\Models\Categoria;
use App\Http\Requests\Inventario\StoreModeloRequest;
use App\Http\Requests\Inventario\UpdateModeloRequest;

class ModeloController extends Controller
{
    public function index()
    {
        $modelos = Modelo::all()->sortByDesc('updated_at');
        return view('modulos.inventario.modelos.index', [
            'modelos' => $modelos
        ]);
    }

    public function create()
    {
        $modelo = new Modelo;
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all()->sortBy('nombre');
        $marcas = Marca::all();

        return view('modulos.inventario.modelos.create',
            compact('modelo','subcategorias','marcas', 'categorias'));
    }

    public function store(StoreModeloRequest $request)
    {
        Modelo::create($request->validated());
        return redirect()->route('modelos.index')
            ->with('status', 'El modelo fue creado con éxito');
    }

    public function show(Modelo $modelo)
    {
        return view('modulos.inventario.modelos.show', [
            'modelo' => $modelo,
        ]);
    }

    public function edit(Modelo $modelo)
    {
        $categorias = Categoria::all();
        $subcategorias = Subcategoria::all()->sortBy('nombre');
        $marcas = Marca::all();
        return view('modulos.inventario.modelos.edit', [
            'modelo' => $modelo,
            'categorias' => $categorias,
            'subcategorias' => $subcategorias,
            'marcas' => $marcas,
        ]);
    }

    public function update(Modelo $modelo, UpdateModeloRequest $request)
    {
        $modelo->update($request->validated());
        return redirect()->route('modelos.show', $modelo);
    }

    public function destroy(Modelo $modelo)
    {
        $modelo->delete();
        return redirect()->route('modelos.index')->with('deleted', true );
    }
}
