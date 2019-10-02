<?php

namespace App\Providers;

use App\Http\Models\Exercicio;
use Illuminate\Support\ServiceProvider;

class ProviderListaExercicios extends ServiceProvider
{
    //Provider setado para realizar o select dinamico na tabela Exercicio
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayExercicios', Exercicio::all()->where('deleted_at', NULL));
      });
    }
}
