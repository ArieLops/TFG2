@extends('adminlte::page')

@section('title', 'Editar Anamnese')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Anamnese</h3>
                <a href="{{route('listarAnamnese')}}" class="btn btn-info btn-sm pull-right">Listar Anamneses</a>
            </div>
            <div class="box-body">
                <form action="{{route('atualizarAnamnese', ['id' => $dados->id])}}" id="formAnamnese" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="box-body">
                        @include('admin.anamnese.formulario')
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
