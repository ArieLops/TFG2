<?php

namespace App\Providers;

use App\Http\Models\Musculatura;
use Illuminate\Support\ServiceProvider;

class ProviderListaMusculaturas extends ServiceProvider
{
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayMusculaturas', Musculatura::all()->where('deleted_at', NULL));
      });
    }
}
