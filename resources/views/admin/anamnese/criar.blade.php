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
    jQuery(document).delegate('a.delete-registro', 'click', function(e) {
            e.preventDefault();

    var didConfirm = confirm("Você tem certeza que deseja excluir?");
        if (didConfirm == true) {
            var id = jQuery(this).attr('data-id');
            var targetDiv = jQuery(this).attr('targetDiv');
        jQuery('#sinal-' + id).remove();
      
        //Regenera o número do indice da tabela
        $('#tabelaSinaisBody tr').each(function(index) {
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
        var content = jQuery('#tabelaSinaisAmostra tr'),
        size = jQuery('#tabelaSinais >tbody >tr').length + 1,
        element = null,    
        element = content.clone();
        element.attr('id', 'sinal-'+size);
        element.find('.delete-registro').attr('data-id', size);
        element.appendTo('#tabelaSinaisBody');
        element.find('.sn').html(size);
    });
</script>
@stop
