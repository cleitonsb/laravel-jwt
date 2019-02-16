<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UsuarioRequest extends FormRequest
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
            'nome'      => 'required',
            'sexo'      => ['required', Rule::in(['M', 'F'])],
            'email'     => 'required|email',
            'password'  => 'required',
            'fone'      => 'required|numeric',
            'co_bairro' => 'required|exists:tb_bairro,co_bairro',
        ];
    }
}
