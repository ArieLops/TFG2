@extends('adminlte::page')

@section('title', 'PRATICANTE')

@section('content_header')
@stop

@section('content')
<!-- Arrumar aqui pois nao está pegando quando nao tem avaliacao 
    tentei passar da controller para cá dados na posicao 0 para dar a mensagem mas nao esta
    funcionando -->
<?php $cont = count($dados);
    if($cont == 1){ ?>
        <script>$("#resultado").addClass('hidden');</script>
    <?php }
?>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Índice de Massa Muscular</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div id="resultado" class="inner">  
                        <h3>{{$dados["imc"]}}</h3>
                        <p>{{$dados["situacao"]}}</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-weight"></i>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <span class="label label-success">{{$dados["objetivo"][0]}}</span>
            </div>
            <div class="col-lg-3 col-xs-6">
                <span class="label label-info">{{$dados["ultimaAvaliacao"][0] = date('d/m/Y', strtotime($dados["ultimaAvaliacao"][0]))}}</span>
            </div>
            <div class="col-lg-3 col-xs-6">
                <span class="label label-warning">{{$dados["proximaAvaliacao"][0] = date('d/m/Y', strtotime($dados["proximaAvaliacao"][0]))}}</span>
            </div>
        </div>
    </div>
</div>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Gráfico de desenvolvimento pessoal</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        
    </div>
</div>
<div class="box box-primary">
    <div class="box-header with-border">
        <h3 class="box-title">Cadastros</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
        </div>
    </div>
    <div class="box-body">
        <div class="row">
            <td><a href="/praticante/exame/adicionar" class="btn btn-app"><i class="fa fa-heartbeat"></i>Adicionar Exame</a></td>
        </div>
    </div>
</div>
@stop