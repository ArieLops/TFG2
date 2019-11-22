<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoExame extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }
    
    public function rules()
    {
        return [
            'users_id'  => 'required',
            'dataRealizado' => 'required',
            'arquivo' => 'required'
        ];
        
    }

    public function messages(){
        return [
            'users_id.required' => "O campo NOME deve ser preenchido",
            'dataRealizado.required' => "O campo DATA deve ser preenchido",
            'arquivo.required' => 'O campo ARQUIVO deve ser selecionado',
        ];
    }
}
