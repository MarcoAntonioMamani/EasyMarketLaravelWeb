<?php

namespace EasyMarket\Http\Requests;

use EasyMarket\Http\Requests\Request;

class ClienteFormRequest extends Request {

    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        return [
            'nombre' => 'required|string|max:100',
            'correo' => 'required|email|max:100',
            'direccion' => 'required|string|max:255',
            'telefono' => 'required|string|max:20',
            'imgCli' => 'mimes:jpeg,png',
        ];
    }

}
