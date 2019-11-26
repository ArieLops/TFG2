<?php

namespace App\Http\Controllers\Praticante;

use League\Fractal\Manager;
use League\Fractal\Resource\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use App\Http\Models\Users;
use App\Http\Models\Avaliacao;
use App\Http\Models\Objetivo;
use App\Http\Models\Treino;
use App\Http\Models\Exame;
use Carbon\Carbon;

class PraticanteController extends Controller
{
    public function index(){
        //Identifica o usuario logado com o nome e o id
        $nomeUsuarioLogado = Auth::user()->name;
        $idUsuarioLogado   = Auth::user()->id;

        //Pega todos os dados do usuario 
        $usuario   = Users::where("id", "=", $idUsuarioLogado)->get();
        $avaliacao = Avaliacao::where("users_id", "=", $idUsuarioLogado)->get();

        //Selectiona apenas a massa e a altura 
        $massa  = $avaliacao->pluck('massa')->all();
        $altura = $avaliacao->pluck('estatura')->all();
        $ultimaAvaliacao = $avaliacao->pluck('dataInicial');
        $proximaAvaliacao = $avaliacao->pluck('dataFinal');

        //Pega o objetivo
        $objetivo        = $usuario->pluck('objetivo_id');
        $getNomeObjetivo = Objetivo::where("id", "=", $objetivo)->get();
        $getNomeObjetivo = $getNomeObjetivo->pluck('nome');

        $dados["ultimaAvaliacao"]  = $ultimaAvaliacao;
        $dados["proximaAvaliacao"] = $proximaAvaliacao;
        $dados["objetivo"]         = $getNomeObjetivo;

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

    public function create(){
        $nomeUsuarioLogado = Auth::user()->name;
        $idUsuarioLogado   = Auth::user()->id;

        $users_id = $idUsuarioLogado;

        return view('praticante.exame.criar', compact('users_id'));
    }

    public function store(Request $request){
        $idUsuarioLogado   = Auth::user()->id;

        $path = $request->file('arquivo')->store('storage','public');
        $exame = new Exame();
        $exame->users_id = $idUsuarioLogado;
        $limpaData = str_replace('/', '-', $request->input('dataRealizado'));
        $exame->dataRealizado = Carbon::parse($limpaData);
        $exame->arquivo = $path;

        $exame->save();
        return redirect('praticante/exame/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }
    
    public function getDataAvaliacao(){
        $idUsuarioLogado   = Auth::user()->id;

        $avaliacao = Avaliacao::where("users_id", "=", $idUsuarioLogado)->get();

        $result["massa"]    = $avaliacao->pluck('massa')->all();
        $result["estatura"] = $avaliacao->pluck('estatura')->all();

        for($i = 0; $i < count($result["massa"]) - 1; $i++){
            $result["imc"][$i] = $result["massa"][$i] / ($result["estatura"][$i] * $result["estatura"][$i]);
        }

        return response()->json($result);
    }

    public function visualizarTreino(){
        $idUsuarioLogado   = Auth::user()->id;

        $treinos = new Treino;
        
        $treinos = $treinos::where("users_id", "=", $idUsuarioLogado)->orderBy('id', 'desc')->with(['musculaturas', 'exercicios', 'series', 'repeticoes', 'cargas'])->get()->first();

        for($i = 0; $i < count($treinos->musculaturas); $i++){
            $j = $i +1;
            $dados[$j]["musculatura"] = $treinos->musculaturas[$i]["nome"];
            $dados[$j]["exercicio"] = $treinos->exercicios[$i]["nome"];
            $dados[$j]["serie"] = $treinos->series[$i]["serie"];
            $dados[$j]["repeticao"] = $treinos->repeticoes[$i]["repeticao"];
            $dados[$j]["carga"] = $treinos->cargas[$i]["carga"];
        }
    
        return view('praticante.treino.criar', compact('dados'));
    }

    public function praticanteSalvarTreino(Request $request){
        $idUsuarioLogado   = Auth::user()->id;
        $treinos            = new Treino;

        $treinos = new Treino;
        $treinos = $treinos::where("users_id", "=", $idUsuarioLogado)->orderBy('id', 'desc')->with(['musculaturas', 'exercicios', 'series', 'repeticoes', 'cargas'])->get()->first();
        
        $idTreino = $treinos["id"];
        
        return redirect('praticante/treino')->with('mensagem', 'Registro adicionado com sucesso!');
    }

}
