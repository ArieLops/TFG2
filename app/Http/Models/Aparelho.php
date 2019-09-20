<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Aparelho extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'aparelho';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];

}
