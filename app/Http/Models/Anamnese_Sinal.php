<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;

class Anamnese_Sinal extends Model
{
    protected $table = "anamnese_sinal";
    protected $fillable = ['anamnese_id', 'sinal_id', 'comentario'];
    public $timestamps = false;

    public function createAnamneseSinal($anamnese_id, $sinal_id, $comentario){
        $this->create(['anamnese_id' => $anamnese_id,
                       'sinal_id'    => $sinal_id,
                       'comentario'  => $comentario]);
    }
}
