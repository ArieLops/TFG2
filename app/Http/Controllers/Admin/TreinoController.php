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
        
        /*
            SELECT exercicio.id, exercicio.nome, exercicio_musculatura.musculatura_id, musculatura.id, musculatura.nome 
            FROM exercicio
            JOIN exercicio_musculatura
            ON exercicio.id = exercicio_musculatura.exercicio_id
            JOIN musculatura
            ON exercicio_musculatura.musculatura_id = musculatura.id
            WHERE musculatura.id = 3"
        */

        $exercicio = Exercicio::load();

        dd($exercicio);

        /*
        $exercicio = DB::select(`exercicio.id`,`exercicio.nome`,`exercicio_musculatura.musculatura_id`,`musculatura.id`,`musculatura.nome`)
		->from(`exercicio`)
		->join(`exercicio_musculatura`, function($join) {
			$join->on(`exercicio.id`, `=`, `exercicio_musculatura.exercicio_id`);
			})
		->join(`musculatura`, function($join) {
			$join->on(`exercicio_musculatura.musculatura_id`, `=`, `musculatura.id`);
			})
		->where(`musculatura.id`, `=`, $musculatura_id)
        ->get();
        */
        
        return response()->json($exercicio);
    }
}

