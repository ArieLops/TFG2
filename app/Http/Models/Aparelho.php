<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sofa\Eloquence\Eloquence;

class Aparelho extends Model
{
    use SoftDeletes;
    use Eloquence;

    protected $searchableColumns = ['nome'];

    public $timestamps  = true;
    protected $table    = 'aparelho';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];

}
