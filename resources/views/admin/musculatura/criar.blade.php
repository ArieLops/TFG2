@extends('adminlte::page')

@section('title', 'Adicionar Musculaturas')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Musculatura</h3>
                <a href="{{route('listarMusculatura')}}" class="btn btn-info btn-sm pull-right">Listar Musculaturas</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarMusculatura')}}" id="formMusculatura" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.musculatura.formulario')
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
