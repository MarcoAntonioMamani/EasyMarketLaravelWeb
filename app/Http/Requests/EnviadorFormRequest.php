<?php

namespace EasyMarket\Http\Requests;

use EasyMarket\Http\Requests\Request;

class EnviadorFormRequest extends Request
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
        'nombre'=>'required|max:99',
        'direccion'=>'required|max:100',
        'fechaNacimiento'=>'required|max:100',
        'imgEnv'=>'mimes:jpeg,bmp,png',
        'correo'=>'required|max:254',
        'contrasena'=>'required|max:254'

            
        ];
    }
}
