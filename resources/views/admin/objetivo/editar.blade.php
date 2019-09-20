@extends('adminlte::page')

@section('title', 'Editar Objetivo')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Objetivo</h3>
                <a href="{{route('listarObjetivo')}}" class="btn btn-info btn-sm pull-right">Listar Objetivos</a>
            </div>
            <div class="box-body">
                <form action="{{route('atualizarObjetivo', ['id' => $dados->id])}}" id="formObjetivo" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="box-body">
                        @include('admin.objetivo.formulario')
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
