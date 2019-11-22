<?php

namespace App\Providers;

use App\Http\Models\Serie;
use Illuminate\Support\ServiceProvider;

class ProviderListaSeries extends ServiceProvider
{
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arraySeries', Serie::all()->where('deleted_at', NULL));
      });
    }
}
