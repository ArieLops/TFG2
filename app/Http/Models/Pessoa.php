<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pessoa extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'pessoa';
    protected $fillable = ['nome', 'email', 'data_nascimento', 'sexo', 'telefone', 'cpf', 'rg', 'tipo'];
    protected $dates    = ['deleted_at'];

    public function exames(){
        return $this->hasMany(Exames::class);
    }

    public function avaliacoes(){
        return $this->hasMany(Avaliacao::class);
    }
    
    public function objetivo(){
        return $this->belongsTo(Objetivo::class);
    }

    public function anamnese(){
        return $this->hasOne(Anamnese::class);
    }
}
