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
                <form action="{{route('salvarTreino')}}" class="validacao" id="formTreino" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body hidden" id="divTreino">
                        @include('admin.treino.formulario')
                    </div>
                    <div class="box-body hidden" id="divTreinoSemana">
                        @include('admin.treino.formularioSemana')
                    </div>
                    <div class="box-body" id="divTreinoAdicionarSemana">
                        @include('admin.treino.formularioAdicionarSemana')
                    </div>
                     <div class="box-footer hidden">
                        @include('includes.botaoFormCriar')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $.ajaxSetup({
            headers: {
                'X-CSRF': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $("#btnAdicionar").click(function(){
            var users_id = $("#users_id option:selected").val();
            $.ajax({
                url: '/admin/pessoa/searchUserObjetivo',
                type: 'GET',
                dataType: 'json',
                data: 'users_id=' + users_id,
                success: function(dados){
                    var result = dados.objetivo.nome;
                    document.getElementById('nomeObjetivoTabela').innerHTML = result
                }
            });
        });

        $("#criar").click(function(){
            var nomePessoa = $("#users_id option:selected").html();
            var objetivo = $("#nomeObjetivoTabela").html();
            $("#pessoaSelecionada").val(nomePessoa);
            $("#objetivoSelecionado").val(objetivo);
        });
    });
        
        let data = new Date();
        let dataPt = {
            year: 'numeric',
            month: '2-digit',
            day: '2-digit'
        };
        var dataBR = data.toLocaleDateString('pt-BR', dataPt);

        $('#btnAdicionar').on('click', function() {
            $('#tblConteudo').removeClass('hidden');
            $("#selectPessoa").prop('disabled', true);
            $("#dataTreinoTabela").html(dataBR);
        });

        $('#criar').on('click', function() {
            $("#divTreino").addClass('hidden');
            $("#divTreinoSemana").removeClass('hidden');
        });

        $('#addOpcaoTreino').on('click', function(){
            $("#divTreinoAdicionarSemana").removeClass('hidden');
        });

        $('.addRowExercicio').on('click', function(){
            addRowExercicio();
        });

        (function($) {
            removeLinhaExercicios = function(item) {
            var tr = $(item).closest('tr');

            tr.fadeOut(400, function() {
                tr.remove();  
            }); 
                return false;
            }
        })(jQuery);
    
        function addRowExercicio(){
                   var tr = '<tr>'+
                            '<td class="text-center" style="width: 20%;">'+
                            '<select class="form-control exercicio_id" name="exercicio_id[]" id="exercicio_id">'+
                            '<option selected disabled value="">Exercício</option>'+
                            '@<?php foreach ($arrayExercicios as $dados): ?>'+
                            '<option id="selectExercicioArray" value="{{$dados->id}}">{{$dados->nome}}</option>'+
                            '<?php endforeach; ?>'+
                            '</select>'+
                            '</td>'+
                            '<td class="text-center" style="width:13%;">'+
                            '<input type="text" class="form-control">'+
                            '</td>'+
                            '<td class="text-center" style="width:13%;">'+
                            '<input type="text" class="form-control">'+
                            '</td>'+
                            '<td class="text-center" style="width:13%;">'+
                            '<input type="text" class="form-control">'+
                            '</td>'+
                            '<td class="text-center" style="width:13%;">'+
                            '<input type="text" class="form-control">'+
                            '</td>'+
                            '<td class="text-center" style="width:13%;">'+
                            '<input type="text" class="form-control">'+
                            '</td>'+
                            '<td class="text-center" style="width:5%;">'+
                            '<a class="btn btn-danger" type="button" onclick="removeLinhaExercicios(this)"><i class="fas fa-trash-alt"></i></a>'+
                            '</td>'+
                            '</tr>'
            $("#tabelaExerciciosBody").append(tr);
        };
        
    //NAO ESTÀ FUNCIONANDO

    //Treino - Adicionar - Musculatura
    $(document).on("change", ".musculatura_id" , function(e) {
        var musculatura_id = $(this).val(),
            exercicio_id = $(this).parent().next().find('select');

        if(musculatura_id){
            $.ajax({
                url: "/admin/treino/getExercicioList",
                type:"GET",
                dataType: 'json',
                data: 'musculatura_id=' + musculatura_id,
                success:function(res){
                    if(res){
                        exercicio_id.empty();
                        $.each(res, function(key, value){
                            exercicio_id.append('<option value="' + res[key]["id"] + '">' + res[key]["nome"] + '</option>');
                        });
                    }else{
                        exercicio_id.empty();
                    }
                }
            });
        }else{
            exercicio_id.empty();
        }
    });

</script>
@stop