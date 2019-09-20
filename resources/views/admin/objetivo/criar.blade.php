@extends('adminlte::page')

@section('title', 'Adicionar Objetivo')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Objetivo</h3>
                <a href="{{route('listarObjetivo')}}" class="btn btn-info btn-sm pull-right">Listar Objetivos</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarObjetivo')}}" id="formObjetivo" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.objetivo.formulario')
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
