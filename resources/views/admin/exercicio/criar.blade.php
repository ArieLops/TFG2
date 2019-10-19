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
                <a href="{{route('adicionarMusculatura')}}" class="btn btn btn-sm pull-right" style="margin:0 5px; background-color: #ffa500; color:white;">Adicionar Musculatura</a>
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
<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script> -->
<!--<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script>
    $("#tags").select2({
        placeholder: "Escolha as tags da musculatura ...",
        minimumInputLength: 1,
        ajax: {
            url: '/admin/exercicio/find',
            dataType: 'json',
            data: function (params) {
                return {
                    q: $.trim(params.term)
                };
            },
            processResults: function (data) {
                return {
                    results: data
                };
            },
            cache: true
        }
    });
</script>
@endsection
