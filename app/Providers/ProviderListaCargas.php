<?php

namespace App\Providers;

use App\Http\Models\Carga;
use Illuminate\Support\ServiceProvider;

class ProviderListaCargas extends ServiceProvider
{
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayCargas', Carga::all()->where('deleted_at', NULL));
      });
    }
}
