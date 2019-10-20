<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Exercicio;
use App\Http\Models\Musculatura;
use App\Http\Models\Aparelho;
use App\Http\Requests\ValidacaoExercicio;

class ExercicioController extends Controller
{ 
    private $exercicio;
    private $musculatura;
    private $aparelho;
    private $paginacao = 5;

    public function __construct(Exercicio $exercicio){
        $this->exercicio = $exercicio;
    }

    public function __construct1(Musculatura $musculatura){
        $this->musculatura = $musculatura;
    }

    public function __construct2(Aparelho $aparelho){
        $this->aparelho = $aparelho;
    }

    public function index()
    {
        //Listar todos os exercício cadastradas
        $exercicios = Exercicio::orderBy('id')->get();
        $exercicios = $this->exercicio->paginate($this->paginacao);

        return view('admin.listarExercicio', compact('exercicios'));
    }

    public function create()
    {
        return view('admin.exercicio.criar');
    }

    public function store(ValidacaoExercicio $request)
    {
        $exercicio = Exercicio::create($request->all());
        //Na linha abaixo estou utilizando a function 'musculaturas' que foi criada dentro da model de exercicio 
        //para apontar um relacionamento de n para n
        $exercicio->musculaturas()->sync((array)$request->input('tagsMusculatura'));
        $exercicio->aparelhos()->sync((array)$request->input('tagsAparelho'));
        return redirect('admin/configuracao/exercicio/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function destroy($id)
    {
        Exercicio::destroy($id);
        return redirect('admin/configuracao/exercicio')->with('mensagem', 'Registro excluído com sucesso!');
    }

    public function findMusculatura(Request $request)
    {
        $term = trim($request->q);

        if(empty($term)){
            return \Response::json([]);
        }
    
        $tagsMusculatura = Musculatura::search($term)->limit(10)->get();

        $formatted_tags = [];

        foreach($tagsMusculatura as $tagMusculatura){
            $formatted_tags[] = ['id' => $tagMusculatura->id, 'text' => $tagMusculatura->nome];
        }

        return \Response::json($formatted_tags);
    }

    public function findAparelho(Request $request)
    {
        $term = trim($request->q);

        if(empty($term)){
            return \Response::json([]);
        }

        $tagsAparelho = Aparelho::search($term)->limit(10)->get();

        $formatted_tags_aparelho = [];

        foreach($tagsAparelho as $tagAparelho){
            $formatted_tags_aparelho[] = ['id' => $tagAparelho->id, 'text' => $tagAparelho->nome];
        }

        return \Response::json($formatted_tags_aparelho);
    }
}
