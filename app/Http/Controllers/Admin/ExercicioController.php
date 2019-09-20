<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Exercicio;
use App\Http\Requests\ValidacaoExercicio;

class ExercicioController extends Controller
{ 
    private $exercicio;
    private $paginacao = 5;

    public function __construct(Exercicio $exercicio){
        $this->exercicio = $exercicio;
    }

    public function index()
    {
        //Listar todos as musculaturas cadastradas
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
        Exercicio::create($request->all());
        return redirect('admin/exercicio/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dados = Exercicio::findOrFail($id);
        return view('admin.exercicio.editar', compact('dados'));
    }

    public function update(ValidacaoExercicio $request, $id)
    {
        Exercicio::findOrFail($id)->update($request->all());
        return redirect('admin/exercicio')->with('mensagem', 'Registros atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Exercicio::destroy($id);
        return redirect('admin/exercicio')->with('mensagem', 'Registro excluído com sucesso!');
    }
}
