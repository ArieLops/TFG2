<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Pessoa;
use App\Http\Requests\ValidacaoPessoa;

class PessoaController extends Controller
{
    private $pessoa;
    private $paginacao = 5;

    public function __construct(Pessoa $pessoa){
        $this->pessoa = $pessoa;
    }
    
    public function index()
    {
        //Listar todos as pessoas cadastradas
        $pessoas = Pessoa::orderBy('id')->get();
        $pessoas = $this->pessoa->paginate($this->paginacao);
        
        foreach($pessoas as $pessoa):
            if($pessoa->tipo == 0){
                $pessoa->tipo = "Aluno";
            }else{
                $pessoa->tipo = "Educador Físico";
            }
        endforeach;

        return view('admin.listarPessoas', compact('pessoas'));
    }

    public function create()
    {
        return view('admin.pessoa.criar');
    }

    public function store(ValidacaoPessoa $request)
    {
        Pessoa::create($request->all());
        return redirect('admin/pessoa/adicionar')->with('mensagem', 'Registro adicionado com sucesso!'); 
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dados = Pessoa::findOrFail($id);
        return view('admin.pessoa.editar', compact('dados'));
    }

    public function update(ValidacaoPessoa $request, $id)
    {
        Pessoa::findOrFail($id)->update($request->all());
        return redirect('admin/pessoa')->with('mensagem', 'Registros atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Pessoa::destroy($id);
        return redirect('admin/pessoa')->with('mensagem', 'Registro excluído com sucesso!');
    }
}
