<?php

namespace EasyMarket\Http\Requests;

use EasyMarket\Http\Requests\Request;

class CategoriaFormRequest extends Request
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
            //
        'nombre'=>'required|max:100',
        'descripcion'=>'max:150'
        ];
    }
}
