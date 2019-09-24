<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Praticante extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'praticante';
    protected $fillable = ['data_inicio'];
    protected $dates    = ['deleted_at'];

    public function avaliacao(){
        return $this->hasMany(Avaliacao::class);
    }
    
}
