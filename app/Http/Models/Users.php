<?php

namespace App\Http\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Users extends Authenticatable
{
    use Notifiable;

    public $timestamps  = true;
    protected $table    = 'users';

    protected $fillable = [
        'name', 'email', 'password', 'data_nascimento', 'data_nascimento', 'sexo', 'telefone', 'cpf', 'rg', 'tipo'
    ];

    protected $hidden = [
        'password', 'remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function objetivo(){
        return $this->belongsTo(Objetivo::class);
    }

    public function avaliacoes(){
        return $this->hasMany(Avaliacao::class);
    }

    public function exames(){
        return $this->hasMany(Exames::class);
    }

    public function anamnese(){
        return $this->hasOne(Anamnese::class);
    }

    public function treinos(){
        return $this->hasMany(Treino::class);
    }
}
