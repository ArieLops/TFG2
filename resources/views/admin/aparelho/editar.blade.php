@extends('adminlte::page')

@section('title', 'Editar Aparelho')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Aparelho</h3>
                <a href="{{route('listarAparelho')}}" class="btn btn-info btn-sm pull-right">Listar Aparelhos</a>
            </div>
            <div class="box-body">
                <form action="{{route('atualizarAparelho', ['id' => $dados->id])}}" id="formAparelho" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="box-body">
                        @include('admin.aparelho.formulario')
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
