<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Local extends Model
{
    //use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'local';
    protected $fillable = ['nome'];
    //protected $dates    = ['deleted_at'];

    public function tipo(){
        return $this->belongsTo('App\Http\Models\Tipo');
    }
}
