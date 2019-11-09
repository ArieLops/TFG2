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
<div class="box">
    <div class="box-body">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div id="resultado" class="inner">  
                        <h3>{{$dados[1]}}</h3>
                        <p>{{$dados[0]}}</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-weight"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@stop