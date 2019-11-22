<?php

namespace App\Providers;

use App\Http\Models\Repeticao;
use Illuminate\Support\ServiceProvider;

class ProviderListaRepeticoes extends ServiceProvider
{
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayRepeticoes', Repeticao::all()->where('deleted_at', NULL));
      });
    }
}
