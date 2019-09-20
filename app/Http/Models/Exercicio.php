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

}
