@extends('adminlte::page')

@section('title', 'Treino')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-body">
                <form action="{{route('praticanteVisualizarTreino')}}" id="formExame" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        @include('praticante.treino.praticanteTreino')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@stop
