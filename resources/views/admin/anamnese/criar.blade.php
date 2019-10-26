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
                <form action="{{route('salvarAnamnese')}}" id="formAnamnese" method="POST" autocomplete="off">
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
    jQuery(document).delegate('a.remove', 'click', function(e) {
            e.preventDefault();

        var rowCount = $('#tabelaSinaisBody >tr').lenght;

        if(rowCount == 1){
            alert('Você não pode remover se tiver somente um único registro');
        }else{
            $(this).parent().parent().remove();
        }
    });

    $('.addRow').on('click', function(){
        addRow();
    });

    function addRow(){
        var tr = '<tr>' +
                      '<td class="text-center" style="" style="width: 30%;">'+
                      '<select class="form-control" name="sinalID[]" id="sinalID">'+
                      '<option selected disabled value="">Selecione o sinal</option>'+
                      '@<?php foreach ($arraySinais as $dados): ?>'+
                      '<option id="selectSinalArray" value="{{$dados->id}}">{{$dados->nome}}</option>'+
                      '<?php endforeach; ?>'+
                      '</select>'+
                      '</td>'+
                      '<td class="text-center" style="width:60%;">'+
                      '<input type="text" class="form-control" name="comentario[]" id="comentario">'+
                      '</td>'+
                      '</td>'+
                      '<td class="text-center" style="width:10%;">'+
                      '<a class="btn btn-danger remove type=" button"><i class="fas fa-trash-alt"></i></a>'+
                      '</td>'+
                      '</tr>';
        $('tbody').append(tr);
    };
</script>
@stop
