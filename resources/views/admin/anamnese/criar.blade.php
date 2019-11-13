@extends('adminlte::page')

@section('title', 'Adicionar Anamnese')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Anamnese</h3>
                <a href="{{route('listarAnamnese')}}" class="btn btn-info btn-sm pull-right">Listar Anamneses</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarAnamnese')}}" class="validacao" id="formAnamnese" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.anamnese.formulario')
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

    //Sinal
    
    //Adicionar linha na tabela sinais
    $('.addRow').on('click', function(){
        addRow();
    });

    //Remover linha da tabela sinais - Falta bloquear quando faltar um registro
    (function($) {
        remove = function(item) {
        var tr = $(item).closest('tr');

        tr.fadeOut(400, function() {
            tr.remove();  
        }); 

            return false;
        }
    })(jQuery);

    function addRow(){
             var tr = '<tr>'+
                      '<td class="text-center" style="" style="width: 90%;">'+
                      '<select class="form-control" name="sinalID[]" id="sinalID">'+
                      '<option selected disabled value="">Selecione o sinal</option>'+
                      '@<?php foreach ($arraySinais as $dados): ?>'+
                      '<option id="selectSinalArray" value="{{$dados->id}}">{{$dados->nome}}</option>'+
                      '<?php endforeach; ?>'+
                      '</select>'+
                      '</td>'+
                      '</td>'+
                      '<td class="text-center" style="width:10%;">'+
                      '<a class="btn btn-danger remove type=" button" id="removeSinal" onclick="remove(this)"><i class="fas fa-trash-alt"></i></a>'+
                      '</td>'+
                      '</tr>';
        $('#tabelaSinaisBody').append(tr);
    };

    //Fim Sinal
    // ------------------------------------------------------------------------------
    //Inicio Lesão

    $('.addRowLesao').on('click', function(){
        addRowLesao();
    });

    //Remover linha da tabela lesoes - Falta bloquear quando faltar um registro
    (function($) {
        removeLinhaLesoes = function(item) {
        var tr = $(item).closest('tr');

        tr.fadeOut(400, function() {
            tr.remove();  
        }); 

            return false;
        }
    })(jQuery);

    function addRowLesao(){
        var tr = "<tr>"+
                  "<td class='text-center' style='' style='width: 30%;'>"+
                  "<select class='form-control lesao_id' name='lesao_id[]' id='lesao_id'>"+
                  "<option selected disabled value=''>Selecione a lesão</option>"+
                  "@<?php foreach ($arrayLesoes as $dados): ?>"+
                  "<option id='selectLesaoArray' value='{{$dados->id}}'>{{$dados->nome}}</option>"+
                  "<?php endforeach; ?>"+
                  "</select>"+
                  "</td>"+
                  "<td class='text-center' style='width:30%;'>"+
                  "<select class='form-control tipo_id' name='tipo_id[]' id='tipo_id'>"+
                  "<option selected disabled value=''>Selecione o tipo</option>"+
                  "@<?php foreach ($arrayTipos as $dados): ?>"+
                  "<option id='selectTipoArray' value='{{$dados->id}}'>{{$dados->nome}}</option>"+
                  "<?php endforeach; ?>"+
                  "</select>"+
                  "</td>"+
                  "<td class='text-center' style='width:30%;'>"+
                  "<select name='local_id[]' id='local_id' class='form-control'>"+
                  "<option selected disabled value=''>Selecione o local</option>"+
                  "</select>"+
                  "</td>"+
                  "<td class='text-center' style='width:10%;'>"+
                  "<a class='btn btn-danger' type='button' id='removeLesao' onclick='removeLinhaLesoes(this)'><i class='fas fa-trash-alt'></i></a>"+
                  "</td>"+
                  "</tr>"
        $("#tabelaLesoesBody").append(tr);
    };

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

</script>
@stop
