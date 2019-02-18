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
            'dt_nasc'   => 'required|date_format:"Y-m-d"',
            'peso'      => 'required|numeric',
            'cartao'    => ['required', Rule::in(['0', '1'])],
            'altura'    => 'required|numeric',
            'horario'   => 'required',
            'viagem'    => ['required', Rule::in(['0', '1'])],
            'local'     => 'required',
            'atende'    => ['required', Rule::in(['M', 'F', 'A'])],
            'anal'      => ['required', Rule::in(['0', '1'])],
            'oralsem'   => ['required', Rule::in(['0', '1'])],
            'beijo'     => ['required', Rule::in(['0', '1'])],
            'acessorios'=> ['required', Rule::in(['0', '1'])],
            'co_etinia' => 'required|exists:tb_etinia,co_etinia',
        ];
    }
}
