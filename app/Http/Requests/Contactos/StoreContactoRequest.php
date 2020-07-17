<?php

namespace App\Http\Requests\Contactos;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Exceptions\HttpResponseException;

class StoreContactoRequest extends FormRequest
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
            'name' => 'required|string|max:10',
            'email' => 'required|string|email|max:25|unique:contactos',
            'id_servicio' =>'required',
            'presupuesto_min' => 'required|digits_between:2,6',
            'presupuesto_max' => 'required|digits_between:2,6',
            'id_mediopago' => 'required',
            'requerimiento' => 'required|string|max:500',
        ];
    }
    protected function failedValidation(Validator $validator)
    {
        throw new HttpResponseException(response()->json($validator->errors(), 422));
    }
   
}
