<?php

namespace App\Providers;

use App\Http\Models\Tipo;
use Illuminate\Support\ServiceProvider;

class ProviderListaTipos extends ServiceProvider
{
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayTipos', Tipo::all()->where('deleted_at', NULL));
      });
    }
}
