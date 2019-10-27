<?php

namespace App\Providers;

use App\Http\Models\Lesao;
use Illuminate\Support\ServiceProvider;

class ProviderListaLesoes extends ServiceProvider
{
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayLesoes', Lesao::all());
      });
    }
}
