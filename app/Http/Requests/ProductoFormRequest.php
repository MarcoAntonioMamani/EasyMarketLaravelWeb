<?php

namespace EasyMarket\Http\Requests;

use EasyMarket\Http\Requests\Request;

class ProductoFormRequest extends Request
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
            'idCat'=>'required',
            'cantidad'=>'required|integer',
            'precio'=>'required|numeric',
            'descripcion'=>'required|string|max:200',
            'imgPro'=>'required|mimes:jpeg,png',
        ];
    }
}
