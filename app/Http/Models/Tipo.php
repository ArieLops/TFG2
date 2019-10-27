<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tipo extends Model
{
    use SoftDeletes;

    protected $searchableColumns = ['nome'];

    public $timestamps  = true;
    protected $table    = 'tipo';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];
}
