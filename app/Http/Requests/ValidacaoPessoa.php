<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoPessoa extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  => 'required|max:100',
            'email' => 'required|email|unique:pessoa,email,' . $this->route('id'),
        ];
    }
}
