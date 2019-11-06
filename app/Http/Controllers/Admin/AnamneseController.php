<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Anamnese;
use App\Http\Models\Anamnese_Sinal;
use Carbon\Carbon;
use DB;
use Gate;

class AnamneseController extends Controller
{
    private $anamnese;
    private $paginacao = 5;

    public function __construct(Anamnese $anamnese){
        $this->anamnese = $anamnese;
    }

    public function index()
    {
        //Listar todos as anamneses cadastradas
        $anamneses = Anamnese::orderBy('id')->get();
        $anamneses = $this->anamnese->paginate($this->paginacao);

        return view('admin.listarAnamnese', compact('anamneses'));
    }

    public function create()
    {
        return view('admin.anamnese.criar');
    }

    public function store(Request $request)
    {
        $anamnese = new Anamnese;

        $anamnese->users_id       = $request->user_id;
        $anamnese->condicionamento = $request->condicionamento;

        $limpaData = str_replace('/', '-', $request->input('dataUltimoCheckup'));
        $anamnese->dataUltimoCheckup = Carbon::parse($limpaData);

        $anamnese->tipoSanguineo        = $request->tipoSanguineo;
        $anamnese->atividadeOcupacional = $request->atividadeOcupacional;
        $anamnese->pressaoSistolica     = $request->pressaoSistolica;
        $anamnese->pressaoDiastolica    = $request->pressaoDiastolica;
        $anamnese->glicose              = $request->glicose;
        $anamnese->triglicerideos       = $request->triglicerideos;

        $anamnese->save();
        $id = $anamnese->id;

        if($id != 0){
            foreach($request->sinalID as $key => $value){
                (new Anamnese_Sinal())->createAnamneseSinal($id, $request->sinalID[$key]);
            }
        }
        
        return redirect('admin/anamnese/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function getLocalList(Request $request){
        $local = DB::table("local")
        ->where("tipo_id", $request->tipo_id)
        ->pluck("nome", "id");
        return response()->json($local);
    }
}
