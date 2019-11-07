<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidacaoAnamnese extends FormRequest
{
    
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'users_id'         => 'required',
            'condicionamento'  => 'required',
            'dataUltimoCheckup'=> 'required',
            'tipoSanguineo'    => 'required',
            'atividadeOcupacional'    => 'required',
            'pressaoSistolica'    => 'required',
            'pressaoDiastolica'    => 'required',
            'glicose'    => 'required',
            'triglicerideos'    => 'required',
        ];
    }

    public function messages(){
        return [
            'users_id.required'             => "O campo NOME escolhido",
            'condicionamento.required'      => "O campo CONDICIONAMENTO deve ser preenchido",
            'dataUltimoCheckup.required'    => 'O campo DATA deve ser preenchido',
            'tipoSanguineo.required'        => 'O campo TIPO SANGUÍNEO deve ser preenchido',
            'atividadeOcupacional.required' => 'O campo ATIVIDADE deve ser preenchido',
            'pressaoSistolica.required'     => 'O campo PRESSÃO SISTÓLICA deve ser preenchido',
            'pressaoDiastolica.required'    => 'O campo PRESSÃO DIASTÓLICA deve ser preenchido',
            'glicose.required'              => 'O campo GLICOSE deve ser preenchido',
            'triglicerideos.required'       => 'O campo TRIGLICERÍDEOS deve ser preenchido',
        ];
    }
}
