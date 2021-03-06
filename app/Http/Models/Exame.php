<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exame extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'exame';
    protected $fillable = ['users_id', 'dataRealizado', 'arquivo'];
    protected $dates    = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\Http\Models\Users', 'users_id', 'id');
    }
}
