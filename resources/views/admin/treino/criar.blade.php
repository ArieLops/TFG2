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
                    <div class="box-body " id="divTreino">
                        @include('admin.treino.formulario')
                    </div>
                    <div class="box-body hidden" id="divTreinoSemana">
                        @include('admin.treino.formularioSemana')
                    </div>
                    <div class="box-body hidden" id="divTreinoAdicionarSemana">
                        @include('admin.treino.formularioAdicionarExercicio')
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
        
        //Adicionar exercicio
        jQuery(document).delegate('.add-exercicio', 'click', function(e) {
            e.preventDefault();

            var content = jQuery('#sample_table tr'),
                size = jQuery('#tabelaExercicios >tbody >tr').length + 1,
                element = null,    
                element = content.clone(true);
                element.attr('id', 'exercicio-' + size);
                element.find('.delete-exercicio').attr('data-id', size);
                element.appendTo('#tabelaExerciciosBody');
                element.find('.sn').html(size);
        });
        
        jQuery(document).delegate('.seleciona-exercicio', 'click', function(e) {

            alert(JSON.stringify($(this)));
            /*$("#tabelaExercicios tr").each(function(){
                //alert(arr.push($(this).find("td:first").text()));
                alert($(this).prev());
            });*/
        });
        

        //Remover linha
        jQuery(document).delegate('.delete-exercicio', 'click', function(e) {
            e.preventDefault();    

            var didConfirm = confirm("Deseja remover esta linha?");
                if (didConfirm == true) {
                    var id = jQuery(this).attr('data-id');
                    var targetDiv = jQuery(this).attr('targetDiv');
                jQuery('#exercicio-' + id).remove();
      
                $('#tabelaExerciciosBody tr').each(function(index) {
                $(this).find('span.sn').html(index+1);
            });
                return true;
            } else {
                return false;
            }
        });

    //Treino - Adicionar - Musculatura
    $(document).on("change", ".musculatura_id" , function(e) {
        var musculatura_id = $(this).val();
        alert(musculatura_id);

        if(musculatura_id){
            $.ajax({
                url: "/admin/treino/getExercicioList",
                type:"GET",
                dataType: 'json',
                data: 'musculatura_id=' + musculatura_id,
                success:function(res){
                    if(res){
                        $("#exercicio_id").empty();
                        $.each(res, function(key, value){
                            $("#exercicio_id").append('<option value="' + res[key]["id"] + '">' + res[key]["nome"] + '</option>');
                        });
                    }else{
                        $("#exercicio_id").empty();
                    }
                }
            });
        }else{
            $("#exercicio_id").empty();
        }
    });

    $(document).on("change", ".tipo_id" , function(e) {
        var tipo_id = $(this).val(),
            local = $(this).parent().next().find('select');
        if(tipo_id){
            $.ajax({
                url: "/admin/anamnese/getLocalList",
                type:"GET",
                dataType: 'json',
                data: 'tipo_id=' + tipo_id,
                success:function(res){
                    if(res){
                        local.empty();
                        $.each(res, function(key, value){
                            local.append('<option value="'+key+'">'+value+'</option>');
                        });
                    }else{
                        local.empty();
                    }
                }
            });
        }else{
            local.empty();
        }
    });

    //Ajax para encaminhar o id do usuario selecionado no treino para pegar a ultima anamnese dele
    //para lesoes, locais e tipos
    $("#addOpcaoTreino").on('click', function(){
        var users_id = $("#users_id option:selected").val();
        if(users_id){
            $.ajax({
                url: "/admin/anamnese/getLesoesList",
                type:"GET",
                dataType: 'json',
                data: 'users_id=' + users_id,
                success:function(res){
                    $("#contModal").append('<h2>' +  + '</h2>');
                    
                    //Abre o modal pelo id
                    $('#modalLesoes').modal('show');
                }
            });
        }
    });
    

</script>
@stop