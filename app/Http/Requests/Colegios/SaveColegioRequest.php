<?php

namespace App\Http\Requests\Colegios;

use Illuminate\Foundation\Http\FormRequest;

class SaveColegioRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        // cuando tengamos sistema de permisos y roles podemos hacer esto
        // return $this->user()->isAdminPnie();

        //Por ahora todos los  usuarios logueados pueden crear colegios
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
            'nombre' => 'required|max:255',
            'codigo' => 'required|integer|regex:/[1-9]{4}/u|unique:App\Models\Colegio,codigo',
            'estado_colegio_id' => 'required|integer|max:9|regex:/[1-9]{1}/u',
        ];
    }

    public function messages()
    {
        return [
            'nombre.required' => 'El colegio requiere un nombre',
            'nombre.max:255' => 'El nombre no puede exceder de 255 caracteres',
            'codigo.required' => 'El código es obligatorio',
            'codigo.integer' => 'El código solo acepta números enteros',
            'codigo.regex'  => 'El código debe estar compuesto de 4 dígitos(Ej.: "1234")',
            'codigo.unique'  => 'El código ingresado ya fué registrado antes',
            'estado_colegio_id.required' => 'Debe asignar un estado al colegio',
        ];
    }
}
