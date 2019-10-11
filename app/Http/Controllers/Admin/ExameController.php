<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Exame;
use App\Http\Requests\ValidacaoExame;
use Illuminate\Support\Facades\Storage;

class ExameController extends Controller
{ 
    private $exame;
    private $paginacao = 5;

    public function __construct(Exame $exame){
        $this->exame = $exame;
    }

    public function index()
    {
        //Listar todos os exames cadastradas
        $exames = Exame::orderBy('id')->get();
        $exames = $this->exame->paginate($this->paginacao);

        return view('admin.listarExame', compact('exames'));
    }

    public function create(){
        return view('admin.exame.criar');
    }

    public function store(Request $request){
        $path = $request->file('arquivo')->store('storage','public');
        $exame = new Exame();
        $exame->praticante_id = $request->input('usuarioID');
        $exame->dataRealizado = $request->input('dataRealizado');
        $exame->dataRealizado = \DateTime::createFromFormat('d-m-Y', '10-16-2003')->format('Y-m-d');
        $exame->arquivo = $path;
        $exame->save();
        return redirect('admin/exame/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function download($id){
        $exame = Exame::find($id);

        if(isset($exame)){
            $path = Storage::disk('public')->getAdapter()->applyPathPrefix($exame->arquivo);
            return response()->download($path);
        }
        return redirect('admin.listarExame');
    }
}
