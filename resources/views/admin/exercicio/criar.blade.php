@extends('adminlte::page')

@section('title', 'Listar Exercício')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Exercicio</h3>
                <a href="{{route('listarExercicio')}}" class="btn btn-info btn-sm pull-right">Listar Exercicios</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarExercicio')}}" id="formExercicio" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.exercicio.formulario')
                    </div>
                    <div class="box-footer">
                        @include('includes.botaoFormCriar')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
