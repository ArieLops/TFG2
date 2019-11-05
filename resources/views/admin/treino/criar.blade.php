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
                    <div class="box-body" id="divTreinoSemana">
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
            var usuarioID = $("#usuarioID option:selected").val();
            $.ajax({
                url: '/admin/pessoa/searchPessoaObjetivo',
                type: 'GET',
                dataType: 'json',
                data: 'usuarioID=' + usuarioID,
                success: function(dados){
                    var result = dados.objetivo.nome;
                    document.getElementById('nomeObjetivoTabela').innerHTML = result
                }
            });
        });

        $("#criar").click(function(){
            var nomePessoa = $("#usuarioID option:selected").html();
            var objetivo = $("#nomeObjetivoTabela").html();
            $("#pessoaSelecionada").val(nomePessoa);
            $("#objetivoSelecionado").val(objetivo);
        });
    });

    $(function() {
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
        
        //Criado para deletar registro da listagem de exercicios
        jQuery(document).delegate('a.delete-registro', 'click', function(e) {
            e.preventDefault();
        //Mensagem de confirmação de exclusão
        var didConfirm = confirm("Você tem certeza que deseja excluir?");
            if (didConfirm == true) {
                var id = jQuery(this).attr('data-id');
                var targetDiv = jQuery(this).attr('targetDiv');
            jQuery('#exercicio-' + id).remove();
      
            //Regenera o número do indice da tabela
            $('#tabelaExerciciosBody tr').each(function(index) {
                $(this).find('span.sn').html(index + 1);
            });
                return true;
            } else {
                return false;
            }
        });
        //Adiciona exercicio na listagem para adição do mesmo
        jQuery(document).delegate('.add-registro', 'click', function(e) {
            e.preventDefault();    
            var content = jQuery('#tabelaExercicioAmostra tr'),
            size = jQuery('#tabelaExercicios >tbody >tr').length + 1,
            element = null,    
            element = content.clone();
            element.attr('id', 'exercicio-'+size);
            element.find('.delete-registro').attr('data-id', size);
            element.appendTo('#tabelaExerciciosBody');
            element.find('.sn').html(size);
        });
    });

    //Treino - Adicionar - Musculatura
    $(function(){
        $('#musculaturaID').on('change', function(){
        var musculatura_id = $(this).val();
        alert(musculatura_id);
        if(musculatura_id){
            $.ajax({
                url: "/admin/treino/getExercicioList",
                type:"GET",
                dataType: 'json',
                data: 'musculatura_id=' + musculatura_id,
                success:function(res){
                    alert(JSON.stringify(res));
                    if(res){
                        $("#exercicio").empty();
                        $.each(res, function(key, value){
                            $("#exercicio").append('<option value="'+key+'">'+value+'</option>');
                        });
                    }else{
                        $("#exercicio").empty();
                    }
                }
            });
        }else{
            $("#exercicio").empty();
        }
    });
    });
</script>
@stop