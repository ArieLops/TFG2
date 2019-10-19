<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Exercicio;
use App\Http\Models\Musculatura;
use App\Http\Requests\ValidacaoExercicio;

class ExercicioController extends Controller
{ 
    private $exercicio;
    private $musculatura;
    private $paginacao = 5;

    public function __construct(Exercicio $exercicio){
        $this->exercicio = $exercicio;
    }

    public function __construct1(Musculatura $musculatura){
        $this->musculatura = $musculatura;
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

    public function store(Request $request)
    {
        $exercicio = Exercicio::create($request->all());
        //Na linha abaixo estou utilizando a function 'musculaturas' que foi criada dentro da model de exercicio 
        //para apontar um relacionamento de n para n
        $exercicio->musculaturas()->sync((array)$request->input('tags'));
        return redirect('admin/exercicio/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    /*
    public function edit($id)
    {
        $dados = Exercicio::findOrFail($id);
        return view('admin.exercicio.editar', compact('dados'));
    }
    */
    
    /*
    public function update(ValidacaoExercicio $request, $id)
    {
        Exercicio::findOrFail($id)->update($request->all());
        $exercicio->musculaturas()->sync((array)$request->input('tags'));
        return redirect('admin/exercicio')->with('mensagem', 'Registros atualizado com sucesso!');
    }
    */

    public function destroy($id)
    {
        Exercicio::destroy($id);
        return redirect('admin/exercicio')->with('mensagem', 'Registro excluído com sucesso!');
    }

    public function find(Request $request)
    {
        $term = trim($request->q);

        if(empty($term)){
            return \Response::json([]);
        }

        $tags = Musculatura::search($term)->limit(2)->get();

        $formatted_tags = [];

        foreach($tags as $tag){
            $formatted_tags[] = ['id' => $tag->id, 'text' => $tag->nome];
        }

        return \Response::json($formatted_tags);
    }
}
