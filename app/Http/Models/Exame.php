<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Exame extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'exame';
    protected $fillable = ['praticante_id', 'dataRealizado', 'arquivo'];
    protected $dates    = ['deleted_at'];
}
