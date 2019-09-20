@extends('adminlte::page')

@section('title', 'Adicionar Anamnese')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Anamnese</h3>
                <a href="{{route('listarAnamnese')}}" class="btn btn-info btn-sm pull-right">Listar Anamneses</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarAnamnese')}}" id="formAnamnese" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.anamnese.formulario')
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
