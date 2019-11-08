<?php

namespace App\Http\Controllers\Praticante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Anamnese;
use App\Http\Models\Anamnese_Sinal;
use App\Http\Models\Anamnese_Lesao;
use DB;
use Auth;

class AnamnesePraticanteController extends Controller
{
    private $anamnese;

    public function __construct(Anamnese $anamnese){
        $this->anamnese = $anamnese;
    }

    public function index(){
        $anamense = new Anamnese;

        //$NomeUsuarioLogado = Auth::user()->name;
        //$idUsuarioLogado   = Auth::user()->id;

        //$anamneses = Anamnese::where('users_id', "=", $idUsuarioLogado)->get()->toArray();

        return view('praticante.praticanteAnamnese', compact('anamneses'));
    }


}
