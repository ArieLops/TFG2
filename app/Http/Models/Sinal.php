<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Sinal extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'sinal';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];
}
