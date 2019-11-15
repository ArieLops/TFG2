<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Anamnese;
use App\Http\Models\Anamnese_Sinal;
use App\Http\Models\Anamnese_Lesao;
use App\Http\Requests\ValidacaoAnamnese;
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
        $anamneses = Anamnese::orderBy('id')->get();
        $anamneses = $this->anamnese->paginate($this->paginacao);
    }

    public function create()
    {
        return view('admin.anamnese.criar');
    }

    public function store(ValidacaoAnamnese $request)
    {
        $anamnese = new Anamnese;

        $anamnese->users_id       = $request->users_id;
        $anamnese->condicionamento = $request->condicionamento;

        $limpaData = str_replace('/', '-', $request->input('dataUltimoCheckup'));
        $anamnese->dataUltimoCheckup = Carbon::parse($limpaData);

        $anamnese->tipoSanguineo        = $request->tipoSanguineo;
        $anamnese->atividadeOcupacional = $request->atividadeOcupacional;
        $anamnese->pressaoSistolica     = $request->pressaoSistolica;
        $anamnese->pressaoDiastolica    = $request->pressaoDiastolica;
        $anamnese->glicose              = $request->glicose;
        $anamnese->triglicerideos       = $request->triglicerideos;



        //dd($request);
        //dd($anamnese);

        $anamnese->save();
        $id = $anamnese->id;

        //dd($request);

        if($request->sinalID != NULL){
            if($id != 0){
                foreach($request->sinalID as $key => $value){
                    //echo 'DD'.$request->sinalID[$key].'<br>';
                    (new Anamnese_Sinal())->createAnamneseSinal($id, $request->sinalID[$key]);
                }
            }
        }        

        exit;

        if($request->lesao_id != NULL){
            if($id != 0){
                foreach($request->lesao_id as $key => $value){
                    (new Anamnese_Lesao())->createAnamneseLesao($id, $request->lesao_id[$key], 
                     $request->tipo_id[$key], $request->local_id[$key]);
                }
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

    public function getLesoesList(Request $request){

        $Anamnese_lesao = new Anamnese_Lesao();

        $anamnese = DB::table("anamnese")
        ->where("users_id", "=", $request->users_id)
        ->orderBy("id","desc")
        ->pluck("id");

        $anamnese = $anamnese[0];
        
        $anamnese_lesao = Anamnese_Lesao::where('anamnese_id',"=", $anamnese)
        ->with(['lesoes', 'tipos', 'locais'])
        ->get()
        ->first();

        return response()->json($anamnese_lesao);
    }
}
