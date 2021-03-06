<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anamnese extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'anamnese';
    protected $fillable = ['users_id', 'condicionamento','dataUltimoCheckup','tipoSanguineo','atividadeOcupacional','pressaoSistolica','pressaoDiastolica','glicose','triglicerideos'];
    protected $dates    = ['deleted_at'];
    
    public function sinais(){
        return $this->belongsToMany("App\Http\Models\Sinal", "Anamnese_Sinal");
    }

    public function lesoes(){
        return $this->belongsToMany("App\Http\Models\Lesao", "Anamnese_Lesao");
    }
}
