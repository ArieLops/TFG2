<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Objetivo;
use App\Http\Requests\ValidacaoObjetivo;

class ObjetivoController extends Controller
{
    private $objetivo;
    private $paginacao = 5;

    public function __construct(Objetivo $objetivo){
        $this->objetivo = $objetivo;
    }

    public function index()
    {
        //Listar todos os objetivos cadastradas
        $objetivos = Objetivo::orderBy('id')->get();
        $objetivos = $this->objetivo->paginate($this->paginacao);

        return view('admin.listarObjetivo', compact('objetivos'));
    }

    public function create()
    {
        return view('admin.objetivo.criar');
    }

    public function store(ValidacaoObjetivo $request)
    {
        Objetivo::create($request->all());
        return redirect('admin/objetivo/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        $dados = Objetivo::findOrFail($id);
        return view('admin.objetivo.editar', compact('dados'));
    }

    public function update(ValidacaoObjetivo $request, $id)
    {
        Objetivo::findOrFail($id)->update($request->all());
        return redirect('admin/objetivo')->with('mensagem', 'Registros atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Objetivo::destroy($id);
        return redirect('admin/objetivo')->with('mensagem', 'Registro excluído com sucesso!');
    }
}
