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
        $treino = new Treino();
    }

    public function getExercicioList(Request $request){

        $musculatura_id = $request->musculatura_id;

        //DB::enableQueryLog();

        $exercicio = Musculatura::find($musculatura_id)->exercicios()->get();

        //dd(DB::getQueryLog());
        
        return response()->json($exercicio);
    }
}

