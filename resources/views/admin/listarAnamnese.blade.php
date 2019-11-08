@extends('adminlte::page')

@section('title', 'Listar Anamneses')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listar Anamneses</h3>
        <a href="{{route('adicionarAnamnese')}}" class="btn btn-info btn-sm pull-right">Adicionar Anamnese</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 5%">ID</th>
                <th style="width: 70%">Nome!!!</th>
                <th>Ação</th>
            </tr>
        </table>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            
        </ul>
    </div>
</div>
@endsection