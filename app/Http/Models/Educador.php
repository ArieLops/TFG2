<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Educador extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'educador_fisico';
    protected $fillable = ['data_admissao', 'data_demissao'];
    protected $dates    = ['deleted_at'];
}
