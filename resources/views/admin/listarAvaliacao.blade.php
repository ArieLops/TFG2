@extends('adminlte::page')

@section('title', 'Listar Avaliações')

@section('content_header')
@stop

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listar Avaliação</h3>
        <a href="{{route('adicionarAvaliacao')}}" class="btn btn-info btn-sm pull-right">Adicionar Avaliação</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 5%">ID</th>
                <th style="width: 28,33%">Nome</th>
                <th style="width: 10%">Ação</th>
            </tr>
                @foreach($avaliacoes as $avaliacao)
                <tr>
                    <td class="idAvaliacao">{{$avaliacao->id}}</td>
                    <td>{{$avaliacao->user->name}}</td>
                    <td>
                        <button type="button" class="btn btn-info btnVisualizarAvaliacao" data-target="modalVisualizarAvaliacao"><i class="fas fa-eye"></i></button>
                        <a href="/admin/avaliacao/{{$avaliacao->id}}/excluir" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach  
            </tr>
        </table>
    </div>
</div>
<div class="modal fade" id="modalVisualizarAvaliacao" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Avaliação</h4>
      </div>
      <div class="modal-body" id="contModalAvaliacao">
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
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
    });
    
    $(".btnVisualizarAvaliacao").click(function(){
        var urlAtual = window.location.href;
        var row = $(this).closest("tr");
        var idAvaliacao = row.find(".idAvaliacao").text();

        $.ajax({
            url: '/admin/avaliacao/searchAvaliacao',
            type: 'GET',
            dataType: 'json',
            data: 'idAvaliacao=' + idAvaliacao,
            success: function(response){
                var trHTML = '';
                
                $.each(response, function(i, item){
                    trHTML += '<tr>';
                    trHTML += '<th>' + 'Praticante: ' + item.user.name + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Data Inicial: ' + item.dataInicial  + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Data Final: ' + item.dataFinal + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Massa: ' + item.massa + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Estatura: ' + item.estatura + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Peitoral: ' + item.peitoral + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Axilar Médio: ' + item.axMedio + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'SubEscapular: ' + item.subEscapular + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Tricipital: ' + item.tricipital + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Bicipital: ' + item.bicipital + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Supra Ilíaca: ' + item.supraIliaca + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Abdominal: ' + item.abdominal + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Panturrilha: ' + item.panturrilha + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Torax: ' + item.torax + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Braço Direiro: ' + item.bracoDireito + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Braço Esquerdo: ' + item.bracoEsquerdo + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Antebraço Direito: ' + item.antebracoDireito + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Antebraço Esquerdo: ' + item.antebracoEsquerdo + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Cintura: ' + item.cintura + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Quadril: ' + item.quadril + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Coxa Direita: ' + item.coxaDireita + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Coxa Esquerda: ' + item.coxaEsquerda + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Perna Direita: ' + item.pernaDireita + '</th>';
                    trHTML += '</tr>';
                    trHTML += '<th>' + 'Perna Esquerda: ' + item.pernaEsquerda + '</th>';
                    trHTML += '</tr>';
                });
                
                $("#contModalAvaliacao").append(trHTML);
                $('#modalVisualizarAvaliacao').modal('show');
            }
        });

        //Recarregar a página ao fechar o modal
        $("#modalVisualizarAvaliacao").on('hide.bs.modal', function(){
            window.location.href = urlAtual;
        });
    });
</script>
@stop