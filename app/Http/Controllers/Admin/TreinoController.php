<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Treino;
use App\Http\Models\Exercicio;
use App\Http\Models\Musculatura;
use App\Http\Models\Exercicio_Musculatura;
use DB;

class TreinoController extends Controller
{
    public function index()
    {
        return 'Listar Treinos cadastrados';
    }

    public function create()
    {
        return view('admin.treino.criar');
    }

    public function store(Request $request)
    {
        //dd($request);

        $treino = new Treino;

        $treino->users_id = $request->users_id;
        $data = explode('-', $request->input('vigenciaTreino'));
        $dataInicial = $data[0];
        $dataFinal   = $data[1];
        $treino->dataInicial = str_replace(' ', '', $dataInicial);
        $treino->dataFinal   = str_replace(' ', '', $dataFinal);
        
        if(count(explode("/",$dataInicial)) > 1){
            $dataInicial =  implode("-",array_reverse(explode("/",$dataInicial)));
        }

        if(count(explode("/",$dataFinal)) > 1){
            $dataFinal =  implode("-",array_reverse(explode("/",$dataFinal)));
        }

        $treino->dataInicial = str_replace(' ', '', $dataInicial);
        $treino->dataFinal   = str_replace(' ', '', $dataFinal);

        $treino->dataInicial;
        $treino->dataFinal;
        
        $treino->save();
        $id = $treino->id;

        if($id){
            $treino->musculaturas()->sync((array)$request->input('musculatura_id'));
            $treino->exercicios()->sync((array)$request->input('exercicio_id'));
            $treino->series()->sync((array)$request->input('serie_id'));
            $treino->repeticoes()->sync((array)$request->input('repeticao_id'));
            $treino->cargas()->sync((array)$request->input('carga_id'));
        }

        return redirect('admin/treino/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function getExercicioList(Request $request){

        $musculatura_id = $request->musculatura_id;

        $exercicio = Musculatura::find($musculatura_id)->exercicios()->get();
        
        return response()->json($exercicio);
    }
}

