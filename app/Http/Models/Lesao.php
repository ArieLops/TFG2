<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Lesao extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'lesao';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];

    public function tipos(){
        return $this->belongsToMany("App\Http\Models\Tipo", "Lesao_Tipo");
    }
}
