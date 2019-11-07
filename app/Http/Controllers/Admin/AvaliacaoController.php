<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Models\Avaliacao;
use App\Http\Requests\ValidacaoAvaliacao;

class AvaliacaoController extends Controller
{
    private $avaliacao;
    private $paginacao = 5;

    public function __construct(Avaliacao $avaliacao){
        $this->avaliacao = $avaliacao;
    }

    public function index()
    {
        //Listar todos as musculaturas cadastradas
        $avaliacoes = Avaliacao::orderBy('id')->get();
        $avaliacoes = $this->avaliacao->paginate($this->paginacao);

        foreach($avaliacoes as $avaliacao){
            $avaliacao->dataInicial = date('d/m/Y', strtotime($avaliacao->dataInicial));
            $avaliacao->dataFinal = date('d/m/Y', strtotime($avaliacao->dataFinal));
        }

        return view('admin.listarAvaliacao', compact('avaliacoes'));
    }

    public function create()
    {
        return view('admin.avaliacao.criar');
    }

    public function store(ValidacaoAvaliacao $request)
    {
        $avaliacao = new Avaliacao;

        $data = explode('-', $request->input('vigenciaAvaliacao'));
        $dataInicial = $data[0];
        $dataFinal   = $data[1];
        $avaliacao->dataInicial = str_replace(' ', '', $dataInicial);
        $avaliacao->dataFinal   = str_replace(' ', '', $dataFinal);
        
        if(count(explode("/",$dataInicial)) > 1){
            $dataInicial =  implode("-",array_reverse(explode("/",$dataInicial)));
        }

        if(count(explode("/",$dataFinal)) > 1){
            $dataFinal =  implode("-",array_reverse(explode("/",$dataFinal)));
        }

        $avaliacao->dataInicial = str_replace(' ', '', $dataInicial);
        $avaliacao->dataFinal   = str_replace(' ', '', $dataFinal);

        $avaliacao->dataInicial;
        $avaliacao->dataFinal;
        
        $avaliacao->users_id = $request->users_id;
        $avaliacao->massa = $request->input('massa');
        $avaliacao->estatura = $request->input('estatura');
        $avaliacao->peitoral = $request->input('peitoral');
        $avaliacao->axMedio = $request->input('axMedio');
        $avaliacao->subEscapular = $request->input('subEscapular');
        $avaliacao->tricipital = $request->input('tricipital');
        $avaliacao->bicipital = $request->input('bicipital');
        $avaliacao->supraIliaca = $request->input('supraIliaca');
        $avaliacao->abdominal = $request->input('abdominal');
        $avaliacao->panturrilha = $request->input('panturrilha');
        $avaliacao->torax = $request->input('torax');
        $avaliacao->bracoDireito = $request->input('bracoDireito');
        $avaliacao->bracoEsquerdo = $request->input('bracoEsquerdo');
        $avaliacao->antebracoDireito = $request->input('antebracoDireito');
        $avaliacao->antebracoEsquerdo = $request->input('antebracoEsquerdo');
        $avaliacao->cintura = $request->input('cintura');
        $avaliacao->quadril = $request->input('quadril');
        $avaliacao->coxaDireita = $request->input('coxaDireita');
        $avaliacao->coxaEsquerda = $request->input('coxaEsquerda');
        $avaliacao->pernaDireita = $request->input('pernaDireita');
        $avaliacao->pernaEsquerda = $request->input('pernaEsquerda');

        $avaliacao->save();

        return redirect('admin/avaliacao/adicionar')->with('mensagem', 'Registro adicionado com sucesso!');
    }

    public function edit($id)
    {
        $dados = Avaliacao::findOrFail($id);
        return view('admin.avaliacao.editar', compact('dados'));
    }

    public function update(Request $request, $id)
    {
        Avaliacao::findOrFail($id)->update($request->all());
        return redirect('admin/avaliacao')->with('mensagem', 'Registros atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Avaliacao::destroy($id);
        return redirect('admin/avaliacao')->with('mensagem', 'Registro excluído com sucesso!');
    }

}
