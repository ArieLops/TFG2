@extends('adminlte::page')

@section('title', 'Listar Avaliações')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Avaliação</h3>
                <a href="{{route('listarAvaliacao')}}" class="btn btn-info btn-sm pull-right">Listar Avaliações</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarAvaliacao')}}" class="validacao" id="formAvaliacao" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.avaliacao.formulario')
                    </div>
                    <div class="box-footer">
                        @include('includes.botaoFormCriar')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
