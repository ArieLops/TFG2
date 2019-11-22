<?php

namespace App\Http\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Sofa\Eloquence\Eloquence;

class Musculatura extends Model
{
    use SoftDeletes;
    use Eloquence;

    protected $searchableColumns = ['nome'];

    public $timestamps  = true;
    protected $table    = 'musculatura';
    protected $fillable = ['nome'];
    protected $dates    = ['deleted_at'];

    public function exercicios(){
        return $this->belongsToMany("App\Http\Models\Exercicio", 'exercicio_musculatura', 'musculatura_id', 'exercicio_id');
    }
}
