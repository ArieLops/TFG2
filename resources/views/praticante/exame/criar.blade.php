@extends('adminlte::page')

@section('title', 'Cadastrar Exames')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-body">
                <form action="{{route('praticanteExameSalvar')}}" id="formExame" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        @include('praticante.exame.formulario')
                    </div>
                    <div class="box-footer">
                        @include('includes.botaoFormCriar')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    function verificaExtensao($input){
        var extPermitidas = ['jpg', 'png'];
        var extArquivo = $input.value.split('.').pop();
        //alert(extArquivo);
        var url = "/praticante/exame";

        if($.inArray(extArquivo,extPermitidas) == -1){
            alert("Esta extensão não pode ser adicionada");
            window.history.pushState("", "", "/");
            $(location).attr("href", url);
        }
    }
</script>
@stop
