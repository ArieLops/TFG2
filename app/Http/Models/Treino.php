<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Treino extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'treino';
    protected $fillable = ['users_id','musculatura_id'];
    protected $dates    = ['deleted_at'];

}
