@extends('adminlte::page')

@section('title', 'Editar Avaliação')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Avaliação</h3>
                <a href="{{route('listarAvaliacao')}}" class="btn btn-info btn-sm pull-right">Listar Avaliações</a>
            </div>
            <div class="box-body">
                <form action="{{route('atualizarAvalicao', ['id' => $dados->id])}}" id="formAvaliacao" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="box-body">
                        @include('admin.avaliacao.formulario')
                    </div>
                    <div class="box-footer">
                        @include('includes.botaoFormEditar')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
