<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Users;
use App\Http\Models\Objetivo;
use App\Http\Requests\ValidacaoUser;
use DB;

class UserController extends Controller
{
    private $user;
    private $paginacao = 5;

    public function __construct(Users $user){
        $this->user = $user;
    }
    
    public function index()
    {
        //Listar todos as pessoas cadastradas
        $users = Users::orderBy('id')->get();

        foreach($users as $user):
            if($user->tipo == 1){
                $user->tipo = "Educador Físico";
            }else{
                $user->tipo = "Aluno";
            }
        endforeach;
        
        return view('admin.listarPessoas', compact('users'));
    }

    public function create()
    {
        return view('admin.pessoa.criar');
    }

    public function store(ValidacaoUser $request)
    {
        $user = new Users;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->data_nascimento = $request->data_nascimento;
        $user->sexo = $request->sexo;
        $user->telefone = $request->telefone;
        $user->cpf = $request->cpf;
        $user->rg = $request->rg;
        $user->objetivo_id = $request->objetivo_id;
        $user->tipo = $request->tipo;
        $user->password = bcrypt('123456');

        $user->save();

        return redirect('admin/pessoa/adicionar')->with('mensagem', 'Registro adicionado com sucesso!'); 
    }

    public function edit($id)
    {
        $dados = Users::findOrFail($id);
        return view('admin.pessoa.editar', compact('dados'));
    }

    public function update(ValidacaoUser $request, $id)
    {
        Users::findOrFail($id)->update($request->all());
        return redirect('admin/pessoa')->with('mensagem', 'Registros atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Users::destroy($id);
        return redirect('admin/pessoa')->with('mensagem', 'Registro excluído com sucesso!');
    }

    public function searchUserObjetivo(Request $request){
        $user = new Users;
        $objetivo = new Objetivo;

        $usuario = $request->users_id;
        
        $consultaObjetivoId   = Users::where('id', "=", $usuario)->with('objetivo')->get()->first();
        return \json_encode($consultaObjetivoId);
    }
}
