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
        $NomeUsuarioLogado = Auth::user()->name;
        $idUsuarioLogado   = Auth::user()->id;

        echo $idUsuarioLogado;

        //$anamneses = Anamnese::find($idUsuarioLogado);

        $anamneses = Anamnese::where('users_id', "=", $idUsuarioLogado)->get();
        
        dd($anamneses);

        if($anamneses != NULL){
            foreach($anamneses as $anamense){
                $anamense->dataUltimoCheckup = date('d/m/Y', strtotime($anamense->dataUltimoCheckup));
            }
        }

        return view('praticante.praticanteAnamnese', compact('anamneses'));
    }


}
