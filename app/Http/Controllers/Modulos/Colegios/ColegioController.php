<?php

namespace App\Http\Controllers\Modulos\Colegios;

use App\Models\Colegio;
use App\Models\EstadoColegio;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\Colegios\SaveColegioRequest;

class ColegioController extends Controller
{
    /**
     * Despliega la lista de colegios.
     *
     */
    public function index()
    {
        $colegios = Colegio::all()->sortByDesc('updated_at');
        return view('modulos.colegios.index', [
            'colegios' => $colegios
        ]);
    }
    /**
     * Muestra el formulario para creación de un colegio.
     *
     */
    public function create()
    {
        $colegio = new Colegio;
        $estado_colegios = EstadoColegio::all(['id', 'estado']);
        return view('modulos.colegios.create', compact('colegio', 'estado_colegios' ));
    }

    /**
     * Almacena un nuevo colegio en la base de datos.
     *
     */
//    public function store(Request $request)
    public function store(SaveColegioRequest $request)
    {
        Colegio::create($request->validated());
        return redirect()->route('colegios')
            ->with('status', 'El Colegio fue agregado con éxito');
    }

    /**
     * Despliega la información de un colegio especifico por medio de su código.
     *
     * @param  Colegio  $colegio
     */
    public function show(Colegio $colegio)
    {
        return view('modulos.colegios.show', [
            'colegio' => $colegio,
        ]);
    }


    /**
     * Muestra el formulario de edición de un colegio específico.
     *
     * @param  Colegio  $colegio
     *
     */
    public function edit(Colegio $colegio)
    {
        $estado_colegios = EstadoColegio::all(['id', 'estado']);
        return view('modulos.colegios.edit',[
            'colegio' => $colegio,
            'estado_colegios' => $estado_colegios
        ]);
    }

    /**
     * Actualiza el colegio especificado en la base de datos.
     *
     */
    public function update(Colegio $colegio)
    {
//        dd(request());
        request()->validate([
            'nombre' => 'required|max:255',
            'codigo' => 'required|integer|max:9999|regex:/[1-9]{4}/u',
            'estado_colegio_id' => 'required|integer|max:9|regex:/[1-9]{1}/u',
        ]);

        $colegio->update([
            'nombre' => request('nombre'),
            'codigo' => request('codigo'),
            'estado_colegio_id' => request('estado_colegio_id'),
        ]);

        $cole = DB::table('colegios')->where('codigo', request('codigo'))->first();
        return redirect()-> route('colegios.show', $cole->codigo)->with('status', 'El colegio fue editado satisfactoriamente.');
    }

    /**
     * Elimina el colegio especifico de la base de datos.
     *
     */
    public function destroy(Colegio $colegio)
    {
        $colegio->delete();
//        return redirect()->route('colegios')->with('status', 'El colegio fue eliminado satisfactoriamente');
        return redirect()->route('colegios')->with('deleted', true);
    }

    public function select(){
        $users = User::all('name', 'id');
        $colegios = Colegio::all('nombre', 'codigo');
        return view('modulos.colegios.select',compact('users', 'colegios'));
    }
}
