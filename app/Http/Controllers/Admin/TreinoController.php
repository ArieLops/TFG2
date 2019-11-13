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
        dd($id);

        if($request->musculatura_id){
            if($id != 0){
                foreach($request->musculatura_id as $key => $value){
                    //$treino->save($id, $request->musculatura_id[$key]);
                    echo "$request->musculatura_id[$key]";
                }
            }
        }
        
    }

    public function getExercicioList(Request $request){

        $musculatura_id = $request->musculatura_id;

        $exercicio = Musculatura::find($musculatura_id)->exercicios()->get();
        
        return response()->json($exercicio);
    }
}

