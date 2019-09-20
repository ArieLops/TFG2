<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Anamnese extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'anamnese';
    protected $fillable = ['praticante_id'];
    protected $dates    = ['deleted_at'];

}
