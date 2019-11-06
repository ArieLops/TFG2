<?php

namespace App\Providers;

use App\Http\Models\Users;
use Illuminate\Support\ServiceProvider;

class ProviderListaUsers extends ServiceProvider
{
    //Provider setado para realizar o select dinamico na tabela Users
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayUsers', Users::all()->where('user_type', 'user'));
      });
    }
}
