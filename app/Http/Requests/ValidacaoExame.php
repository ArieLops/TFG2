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
            'usuarioID'  => 'required',
            'dataRealizado' => 'required',
            'arquivo' => 'required|mimes:jpg|mimes:pdf|mimes:png',
        ];
        
    }

    public function messages(){
        return [
            'usuarioID.required' => "O campo NOME deve ser preenchido",
            'dataRealizado.required' => "O campo DATA deve ser preenchido",
            'arquivo.required' => 'O campo ARQUIVO deve receber um arquivo PDF, JPG ou PNG',
        ];
    }
}
