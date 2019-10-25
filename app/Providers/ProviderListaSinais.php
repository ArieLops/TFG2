<?php

namespace App\Providers;

use App\Http\Models\Sinal;
use Illuminate\Support\ServiceProvider;

class ProviderListaSinais extends ServiceProvider
{
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arraySinais', Sinal::all()->where('deleted_at', NULL));
      });
    }
}
