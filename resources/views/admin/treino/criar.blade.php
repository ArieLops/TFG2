@extends('adminlte::page')

@section('title', 'Adicionar Treino')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Treino</h3>
                <a href="" class="btn btn-info btn-sm pull-right">Listar Treinos</a>
            </div>
            <div class="box-body">
                <form action="{{route('adicionarTreino')}}" id="formTreino" method="POST" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="box-body" id="divTreino">
                        @include('admin.treino.formulario')
                    </div>
                    <div class="box-body hidden" id="divTreinoSemana">
                        @include('admin.treino.formularioSemana')
                    </div>
                    <div class="box-body hidden" id="divTreinoAdicionarSemana">
                        @include('admin.treino.formularioAdicionarSemana')
                    </div>
                    <!-- <div class="box-footer">
                        @include('includes.botaoFormCriar')
                    </div> -->
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //Functions de personalização do software
    $(function() {
        var qntdDiasPadraoTabela = 1;
        let data = new Date();
        let dataPt = {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit'
        };
        var dataBR = data.toLocaleDateString('pt-BR', dataPt);

        //Objetivo selecionado
        $(document).ready(function() {
            $("#selectObjetivo").change(function() {
                var objetivoSelecionado = $(this).children("option:selected").text();
                $("#nomeObjetivoTabela").html(objetivoSelecionado);
            });

            $("#selectPessoa").change(function() {
                var pessoaSelecionada = $(this).children("option:selected").text();
            });
        });

        $('#btnAdicionar').on('click', function() {
            $('#tblConteudo').removeClass('hidden');
            $("#selectPessoa").prop('disabled', true);
            $("#selectObjetivo").prop('disabled', true);
            $("#dataTreinoTabela").html(dataBR);
            $("#semanasTreinoTabela").html(qntdDiasPadraoTabela);
            //alert(objetivoSelecionado);
        });

        $('#criar').on('click', function() {
            $("#divTreino").addClass('hidden');
            $("#divTreinoSemana").removeClass('hidden');
            $("#semana").val(qntdDiasPadraoTabela);
        });

        $('#addOpcaoTreino').on('click', function(){
            $("#divTreinoAdicionarSemana").removeClass('hidden');
        });
    });
</script>
@stop