<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Musculatura extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'musculatura';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];

}
