<?php

namespace App\Providers;

use App\Http\Models\Users;
use Illuminate\Support\ServiceProvider;
use DB;

class ProviderListaUsers extends ServiceProvider
{
    //Provider setado para realizar o select dinamico na tabela Pessoas
    public function boot()
    {
      view()->composer('*', function($view){
        $view->with('arrayUsers', DB::table('users')->where('tipo',1)->get());
      });
    }
}
