<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Gate;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected function redirectTo(){
        if(Gate::allows('isAdmin')){
            return '/admin';
        }else{
            return '/praticante';
        }
    }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
