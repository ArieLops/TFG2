<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Musculatura;
use App\Http\Requests\ValidacaoMusculatura;

class MusculaturaController extends Controller
{ 
    private $musculatura;
    private $paginacao = 5;

    public function __construct(Musculatura $musculatura){
        $this->musculatura = $musculatura;
    }

    public function index()
    {
        //Listar todos as musculaturas cadastradas
        $musculaturas = Musculatura::orderBy('id')->get();
        $musculaturas = $this->musculatura->paginate($this->paginacao);

        return view('admin.listarMusculatura', compact('musculaturas'));
    }

    public function create()
    {
        return view('admin.musculatura.criar');
    }

    public function store(ValidacaoMusculatura $request)
    {
        Musculatura::create($request->all());
        return redirect('admin/musculatura/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        $dados = Musculatura::findOrFail($id);
        return view('admin.musculatura.editar', compact('dados'));
    }

    public function update(ValidacaoMusculatura $request, $id)
    {
        Musculatura::findOrFail($id)->update($request->all());
        return redirect('admin/musculatura')->with('mensagem', 'Registros atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Musculatura::destroy($id);
        return redirect('admin/musculatura')->with('mensagem', 'Registro excluído com sucesso!');
    }
}
