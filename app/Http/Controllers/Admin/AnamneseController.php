<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Anamnese;
use App\Http\Models\Anamnese_Sinal;
use Carbon\Carbon;

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

        //dd($request);

        $anamnese->pessoa_id       = $request->pessoa_id;
        $anamnese->condicionamento = $request->condicionamento;

        $limpaData = str_replace('/', '-', $request->input('dataUltimoCheckup'));
        $anamnese->dataUltimoCheckup = Carbon::parse($limpaData);

        $anamnese->tipoSanguineo        = $request->tipoSanguineo;
        $anamnese->atividadeOcupacional = $request->atividadeOcupacional;
        $anamnese->pressaoSistolica     = $request->pressaoSistolica;
        $anamnese->pressaoDiastolica    = $request->pressaoDiastolica;
        $anamnese->glicose              = $request->glicose;
        $anamnese->triglicerideos       = $request->triglicerideos;

        $id = $anamnese->save();

        if($id != 0){
            foreach($request->sinalID as $key => $value){
                (new Anamnese_Sinal())->createAnamneseSinal($id, $request->sinalID[$key]);
            }
        }
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
