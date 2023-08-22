<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreProduct extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'sku' => 'required',
            'name' => 'required|max:10|min:3',
            'imagen' => 'required',
            'stock' => 'required',
            'calificacion' => 'required',        
        ];
    }

    public function attributes()
    {
        return [
            'name' => 'nombre del producto'
        ];
    }


    public function messages()
    {
        return
        [
            'calificacion.min' => "Tienes que ingresar forzosamente un valor"
        ];
    }

}
