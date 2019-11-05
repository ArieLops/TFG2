<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Users;
use App\Http\Models\Objetivo;
use App\Http\Requests\ValidacaoPesso;
use App\Http\Controllers\Admin\DB;

class PessoaController extends Controller
{
    private $user;
    private $paginacao = 5;

    public function __construct(User $user){
        $this->user = $user;
    }
    
    public function index()
    {
        //Listar todos as pessoas cadastradas
        $pessoas = Users::orderBy('id')->get();
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
        $pessoa = new Pessoa;

        $pessoa->nome = $request->nome;
        $pessoa->email = $request->email;
        $pessoa->data_nascimento = $request->data_nascimento;
        $pessoa->sexo = $request->sexo;
        $pessoa->telefone = $request->telefone;
        $pessoa->cpf = $request->cpf;
        $pessoa->rg = $request->rg;
        $pessoa->objetivo_id = $request->objetivo_id;
        $pessoa->tipo = $request->tipo;

        $pessoa->save();

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

    public function searchPessoaObjetivo(Request $request){
        $pessoa = new Pessoa;
        $objetivo = new Objetivo;

        $usuario = $request->usuarioID;
        
        $consultaObjetivoId   = Pessoa::where('id',"=", $usuario)->with('objetivo')->get()->first();
        return \json_encode($consultaObjetivoId);
    }
}
