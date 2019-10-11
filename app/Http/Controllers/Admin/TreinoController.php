<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Treino;

class TreinoController extends Controller
{
    
    public function index()
    {
        return 'Listar Treinos cadastrados';
    }

    public function create()
    {
        return view('admin.treino.criar');
    }

    public function store(Request $request)
    {
        $treino = new Treino();

        dd($request);
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
