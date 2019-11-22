<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Repeticao extends Model
{
    use SoftDeletes;

    protected $searchableColumns = ['nome'];

    public $timestamps  = true;
    protected $table    = 'repeticao';
    protected $fillable = ['repeticao'];
    protected $dates    = ['deleted_at'];
}
