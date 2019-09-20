@extends('adminlte::page')

@section('title', 'Listar Musculaturas')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listar Musculaturas</h3>
        <a href="{{route('adicionarMusculatura')}}" class="btn btn-info btn-sm pull-right">Adicionar Musculatura</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 5%">ID</th>
                <th style="width: 70%">Nome</th>
                <th>Ação</th>
            </tr>
            @foreach($musculaturas as $musculatura)
            <tr>
                <td>{{$musculatura->id}}</td>
                <td>{{$musculatura->nome}}</td>
                <td>
                    <a href="/admin/musculatura/{{$musculatura->id}}/editar" class="btn btn-primary">Editar</a>
                    <a href="/admin/musculatura/{{$musculatura->id}}/excluir" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            {!! $musculaturas->links() !!}
        </ul>
    </div>
</div>
@endsection