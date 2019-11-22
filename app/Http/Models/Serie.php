<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Serie extends Model
{
    use SoftDeletes;

    protected $searchableColumns = ['nome'];

    public $timestamps  = true;
    protected $table    = 'serie';
    protected $fillable = ['serie'];
    protected $dates    = ['deleted_at'];
}
