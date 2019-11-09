<?php

namespace App\Http\Controllers\Praticante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Avaliacao;
use App\Http\Models\Objetivo;
use App\Http\Models\Users;
use DB;
use Auth;

class PraticanteController extends Controller
{

    public function index(){

        //Identifica o usuario logado com o nome e o id
        $nomeUsuarioLogado = Auth::user()->name;
        $idUsuarioLogado   = Auth::user()->id;

        //Pega todos os dados do usuario 
        $usuario =   Users::where("id", "=", $idUsuarioLogado)->get();

        //Seleciona apenas o sexo
        $sexo = $usuario->pluck('sexo')->all();

        //Todos os dados das avaliacoes
        $avaliacao = Avaliacao::where("users_id", "=", $idUsuarioLogado)->get();

        //Selectiona apenas a massa e a altura 
        $massa  = $avaliacao->pluck('massa')->all();
        $altura = $avaliacao->pluck('estatura')->all();
        $ultimaAvaliacao = $avaliacao->pluck('dataInicial');
        $proximaAvaliacao = $avaliacao->pluck('dataFinal');

        $dados["ultimaAvaliacao"] = $ultimaAvaliacao;
        $dados["proximaAvaliacao"] = $proximaAvaliacao;

        //Pega o objetivo
        $objetivo        = $usuario->pluck('objetivo_id');
        $getNomeObjetivo = Objetivo::where("id", "=", $objetivo)->get();
        $getNomeObjetivo = $getNomeObjetivo->pluck('nome');

        $dados["objetivo"] = $getNomeObjetivo;

        //Apenas a ultima massa e altura da ultima avaliacao
        $massa  = end($massa);
        $altura = end($altura);

        //Cálculo Básico do IMC - Indícde de Massa Corporal
        if($massa && $altura){
            $imc = ($massa/($altura*$altura));

            //Deixar apenas 2 numeros após o pornto
            $imc = round($imc,2);
            $imc = \number_format($imc,2,',','-');
        
            if($imc < 16){
                $dados["situacao"] = "Magreza Grave";
            }else if($imc >= 16 && $imc < 17){
                $dados["situacao"] = "Magreza Moderada";
            }else if($imc >= 17 && $imc < 18.50){
                $dados["situacao"] = "Magreza Leve";
            }else if($imc >= 18.5 && $imc < 25){
                $dados["situacao"] = "Saudável";
            }else if($imc >= 25 && $imc < 30){
                $dados["situacao"] = "Sobrepeso";
            }else if($imc >= 30 && $imc < 35){
                $dados["situacao"] = "Obesidade I";
            }else if($imc >= 35 && $imc < 40){
                $dados["situacao"] = "Obesidade II";
            }else{
                $dados["situacao"] = "Obesidade III";
            }

            $dados["imc"] = $imc;
        }else{
            $dados["situacao"] = "Não existe nenhuma avaliação";
        }
        
        return view('praticante.praticanteDashboard', compact('dados'));
    }
}
