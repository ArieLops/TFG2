<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Anamnese;

class AnamneseController extends Controller
{
    private $anamnese;
    private $paginacao = 5;

    public function __construct(Anamnese $anamnese){
        $this->anamnese = $anamnese;
    }

    public function index()
    {
        //Listar todos as musculaturas cadastradas
        $anamneses = Anamnese::orderBy('id')->get();
        $anamneses = $this->anamnese->paginate($this->paginacao);

        return view('admin.listarAnamnese', compact('anamneses'));
    }

    public function create()
    {
        return view('admin.anamnese.criar');
    }

    public function store(Request $request)
    {
        //
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
