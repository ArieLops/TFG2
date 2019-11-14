<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treino extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'treino';
    //protected $fillable = ['users_id', 'musculatura_id', 'exercicio_id'];
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
}
