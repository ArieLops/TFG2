<?php

namespace App\Providers;

use App\Http\Models\Objetivo;
use Illuminate\Support\ServiceProvider;

class ProviderListaObjetivos extends ServiceProvider
{
    //Provider setado para realizar o select dinamico na tabela Objetivo
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayObjetivos', Objetivo::all()->where('deleted_at', NULL));
      });
    }
}
