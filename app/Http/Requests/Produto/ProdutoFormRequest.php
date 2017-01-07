<?php

namespace App\Http\Requests\Produto;

use Illuminate\Foundation\Http\FormRequest;

class ProdutoFormRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => 'required|min:3|max:100',
            'numero' => 'required|numeric',
            //'ativo' => '',
            'categoria' => 'required',
            'descricao' => 'min:3|max:1000'
        ];
    }

    public function messages()
    {
        return [
            'nome.required' => 'nome.required',
            'nome.min' => 'nome.min',
            'nome.max' => 'nome.max',
            'numero.required' => 'numero.required',
            'numero.numeric' => 'numero.numeric',
            //'ativo' => '',
            'categoria.required' => 'categoria.required',
            'descricao.min' => 'descricao.min',
            'descricao.max' => 'descricao.max'
        ];
    }
}
