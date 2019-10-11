@extends('adminlte::page')

@section('title', 'Editar Cadastro Pessoa')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Pessoa</h3>
                <a href="{{route('listarPessoa')}}" class="btn btn-info btn-sm pull-right">Listar Pessoas</a>
            </div>
            <div class="box-body">
                <form action="{{route('atualizarPessoa', ['id' => $dados->id])}}" id="formPessoa" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="box-body">
                        @include('admin.pessoa.formulario')
                    </div>
                    <div class="box-footer">
                        @include('includes.botaoFormEditar')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
