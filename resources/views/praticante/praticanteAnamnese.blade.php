@extends('adminlte::page')

@section('title', 'Anamneses Cadastradas')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Anamneses</h3>
        <!--<a href="{{route('adicionarAnamnese')}}" class="btn btn-info btn-sm pull-right">Adicionar Anamnese</a>-->
    </div>
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 80%">Data de Cadastro</th>
                <th style="width: 20%">Ação</th>
            </tr>
            @foreach($anamneses as $anamnese)
            <tr>
                <td></td>
                <td></td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
        
        </ul>
    </div>
</div>
@endsection