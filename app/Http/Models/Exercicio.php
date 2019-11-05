<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exercicio extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'exercicio';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];

    //Aqui é o método que retorna todos os exercicios com suas respectivas musculaturas pré cadastradas no banco
    //o método vai buscar no segundo parametro deste return "na tabela associativa exercicio_musculatura"
    public function musculaturas(){
        return $this->belongsToMany("App\Http\Models\Musculatura", "exercicio_musculatura");
    }

    public function aparelhos(){
        return $this->belongsToMany("App\Http\Models\Aparelho", "exercicio_aparelho");
    }
}
