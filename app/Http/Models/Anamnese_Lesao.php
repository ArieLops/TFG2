<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Anamnese_Lesao extends Model
{
    protected $table = "anamnese_lesao";
    protected $fillable = ['anamnese_id', 'lesao_id', 'tipo_id', 'local_id'];
    public $timestamps = false;

    public function createAnamneseLesao($anamnese_id, $lesao_id, $tipo_id, $local_id){
        $this->create(['anamnese_id' => $anamnese_id,
                       'lesao_id'    => $lesao_id,
                       'tipo_id'    => $tipo_id,
                       'local_id'    => $local_id]);
    }

    public function lesoes(){
        return $this->belongsTo("App\Http\Models\Lesao", "lesao_id");
    }

    public function tipos(){
        return $this->belongsTo("App\Http\Models\Tipo", "tipo_id");
    }

    public function locais(){
        return $this->belongsTo("App\Http\Models\Local", "local_id");
    }
    
}
