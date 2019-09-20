@extends('adminlte::page')

@section('title', 'Listar Aparelhos')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Aparelho</h3>
                <a href="{{route('listarAparelho')}}" class="btn btn-info btn-sm pull-right">Listar Aparelhos</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarAparelho')}}" id="formAparelho" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.aparelho.formulario')
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
