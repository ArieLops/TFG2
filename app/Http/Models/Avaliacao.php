<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Avaliacao extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'avaliacao_fisica';
    protected $fillable = ['users_id','dataInicial','dataFinal','massa','estatura','peitoral','axMedio','subEscapular','tricipital','bicipital','supraIliaca','abdominal','panturrilha','torax','bracoDireito','bracoEsquerdo','antebracoDireito','antebracoEsquerdo','cintura','quadril','coxaDireita','coxaEsquerda','pernaDireita','pernaEsquerda'];
    protected $dates    = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\Http\Models\Users', 'users_id', 'id');
    }

}
