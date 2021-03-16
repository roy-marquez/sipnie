<?php

namespace App\Http\Requests\Inventario;

use Illuminate\Foundation\Http\FormRequest;

class StoreItemRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'colegio_id' => 'required|integer',
            'subcategoria_id' => 'required|integer',
            'marca_id' => 'nullable',
            'modelo_id' => 'nullable',
            'colegio_codigo' => 'required|integer',
            'item_num' => 'required|integer',
            'placa' => 'required|unique:App\Models\Item,placa',
            'serie' => 'nullable',
            'registro_tomo' => 'nullable|integer',
            'registro_folio' => 'nullable|integer',
            'registro_asiento' => 'nullable|integer',
            'adquisicion_id' => 'nullable|integer',
            'fecha_entrada' => 'nullable',
            'fecha_baja' => 'nullable',
            'estado_item_id' => 'required|integer',
            'agregado_por' => 'nullable',
            'modificado_por' => 'nullable',
            'condicion_id' => 'nullable|integer',
            'uso_id' => 'nullable|integer',
            'foto_ruta' => 'nullable',
            'ubicacion_id' => 'nullable|integer',
        ];
    }
}
