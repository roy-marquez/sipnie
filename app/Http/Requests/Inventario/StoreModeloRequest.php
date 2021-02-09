<?php

namespace App\Http\Requests\Inventario;

use Illuminate\Foundation\Http\FormRequest;
use App\Models\Modelo;

class StoreModeloRequest extends FormRequest
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
            'subcategoria_id' => 'required|integer',
            'marca_id' => 'required|integer',
            'nombre' => 'required|unique:App\Models\Modelo,nombre',
            'descripcion' => 'nullable',
        ];
    }
}
