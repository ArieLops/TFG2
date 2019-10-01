<?php

namespace App\Providers;

use App\Http\Models\Pessoa;
use Illuminate\Support\ServiceProvider;

class ProviderListaPessoas extends ServiceProvider
{
    //Provider setado para realizar o select dinamico na tabela Pessoas
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayPessoas', Pessoa::all()->where('tipo', 0));
      });
    }
}
