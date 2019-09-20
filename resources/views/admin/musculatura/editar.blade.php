@extends('adminlte::page')

@section('title', 'Editar Musculaturas')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Editar Musculatura</h3>
                <a href="{{route('listarMusculatura')}}" class="btn btn-info btn-sm pull-right">Listar Musculaturas</a>
            </div>
            <div class="box-body">
                <form action="{{route('atualizarMusculatura', ['id' => $dados->id])}}" id="formMusculatura" method="POST" autocomplete="off">
                    @csrf @method("put")
                    <div class="box-body">
                        @include('admin.musculatura.formulario')
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
