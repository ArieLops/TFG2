<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoObjetivo extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome'  => 'required|max:100|unique:objetivo,nome,'. $this->route('id'),
        ];
    }
}
