<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Exame;
use App\Http\Requests\ValidacaoExame;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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

        foreach($exames as $exame){
            $exame->dataRealizado = date('d/m/Y', strtotime($exame->dataRealizado));
        }
        
        return view('admin.listarExame', compact('exames'));
    }

    public function create(){
        return view('admin.exame.criar');
    }

    public function store(ValidacaoExame $request){
        $path = $request->file('arquivo')->store('storage','public');
        $exame = new Exame();
        $exame->users_id = $request->input('users_id');
        $limpaData = str_replace('/', '-', $request->input('dataRealizado'));
        $exame->dataRealizado = Carbon::parse($limpaData);
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
