@extends('adminlte::page')

@section('title', 'Listar Exames')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Exame</h3>
                <a href="{{route('listarExame')}}" class="btn btn-info btn-sm pull-right">Listar Exames</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarExame')}}" id="formExame" method="POST" autocomplete="off" enctype="multipart/form-data">
                    @csrf
                    <div class="box-body">
                        @include('admin.exame.formulario')
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
        var extPermitidas = ['jpg', 'png', 'pdf'];
        var extArquivo = $input.value.split('.').pop();
        //alert(extArquivo);
        var url = "/admin/exame";

        if($.inArray(extArquivo,extPermitidas) == -1){
            alert("Esta extensão não pode ser adicionada");
            window.history.pushState("", "", "/");
            $(location).attr("href", url);
        }
    }
</script>
@stop
