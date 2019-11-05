<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Objetivo extends Model
{
    use SoftDeletes;

    public $timestamps  = true;
    protected $table    = 'objetivo';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];

    public function users(){
        return $this->hasMany(Users::class);
    }
}
