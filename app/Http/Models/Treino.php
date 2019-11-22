<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treino extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'treino';
    protected $fillable = ['users_id','dataInicial','dataFinal', 'musculatura_id', 'exercicio_id'];
    protected $dates    = ['deleted_at'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    //Um Treino pode ter(pertence) a varias musculaturas
    public function musculaturas(){
        return $this->belongsToMany("App\Http\Models\Musculatura", "treino_musculatura");
    }

    //Um Treino pode ter(pertence) a varios exercicios
    public function exercicios(){
        return $this->belongsToMany("App\Http\Models\Exercicio", "treino_exercicio");
    }

    //Um Treino pode ter(pertence) a varios series
    public function series(){
        return $this->belongsToMany("App\Http\Models\Serie", "treino_serie");
    }

    //Um Treino pode ter(pertence) a varias repeticoes
    public function repeticoes(){
        return $this->belongsToMany("App\Http\Models\Repeticao", "treino_repeticao");
    }

    //Um Treino pode ter(pertence) a varias cargas
    public function cargas(){
        return $this->belongsToMany("App\Http\Models\Carga", "treino_carga");
    }
}
