<?php

namespace App\Http\Controllers\Praticante;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PraticanteController extends Controller
{
    public function index(){
        return view('praticante.praticanteDashboard');
    }
}
