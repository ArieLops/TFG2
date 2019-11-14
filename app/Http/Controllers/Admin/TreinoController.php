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
        $treino = new Treino;

        $treino->users_id = $request->users_id;
        
        $treino->save();
        $id = $treino->id;
        
        if($id){
            $treino->musculaturas()->sync((array)$request->input('musculatura_id'));
            $treino->exercicios()->sync((array)$request->input('exercicio_id'));
            //verifiar como fica os outros campos, provavelmente tenho que fazer um foreach para cadastrar 
            //todos eles
        }
    }

    public function getExercicioList(Request $request){

        $musculatura_id = $request->musculatura_id;

        $exercicio = Musculatura::find($musculatura_id)->exercicios()->get();
        
        return response()->json($exercicio);
    }
}

