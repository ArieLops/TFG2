<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carga extends Model
{
    use SoftDeletes;

    protected $searchableColumns = ['nome'];

    public $timestamps  = true;
    protected $table    = 'carga';
    protected $fillable = ['carga'];
    protected $dates    = ['deleted_at'];
}
