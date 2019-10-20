<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Aparelho;
use App\Http\Requests\ValidacaoAparelho;

class AparelhoController extends Controller
{ 
    private $aparelho;
    private $paginacao = 5;

    public function __construct(Aparelho $aparelho){
        $this->aparelho = $aparelho;
    }

    public function index()
    {
        //Listar todos as musculaturas cadastradas
        $aparelhos = Aparelho::orderBy('id')->get();
        $aparelhos = $this->aparelho->paginate($this->paginacao);

        return view('admin.listarAparelho', compact('aparelhos'));
    }

    public function create()
    {
        return view('admin.aparelho.criar');
    }

    public function store(ValidacaoAparelho $request)
    {
        Aparelho::create($request->all());
        return redirect('admin/configuracao/aparelho/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dados = Aparelho::findOrFail($id);
        return view('admin.aparelho.editar', compact('dados'));
    }

    public function update(ValidacaoAparelho $request, $id)
    {
        Aparelho::findOrFail($id)->update($request->all());
        return redirect('admin/configuracao/aparelho')->with('mensagem', 'Registros atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Aparelho::destroy($id);
        return redirect('admin/configuracao/aparelho')->with('mensagem', 'Registro excluído com sucesso!');
    }
}
