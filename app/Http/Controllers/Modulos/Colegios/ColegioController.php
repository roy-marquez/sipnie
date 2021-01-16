<?php

namespace App\Http\Controllers\Modulos\Colegios;

use App\Models\Colegio;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ColegioController extends Controller
{
    /**
     * Despliega la lista de colegios.
     *
     */
    public function index()
    {
        return view('modulos.colegios.index', [
            'colegios' => Colegio::all()
        ]);
//        return Colegio::all();
    }
    /**
     * Muestra el formulario para creación de un colegio.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Almacena un nuevo colegio en la base de datos.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Despliega un información de un colegio especifico por medio de su código.
     *
     * @param  int  $id
     */
    public function show(Colegio $colegio)
    {
        return view('modulos.colegios.show', [
            'colegio' => $colegio
        ]);
    }

    /**
     * Muestra el formulario de edición de un colegio específico.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
