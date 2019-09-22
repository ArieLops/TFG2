@extends('adminlte::page')

@section('title', 'Listar Exames')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listar Exames</h3>
        <a href="{{route('adicionarExame')}}" class="btn btn-info btn-sm pull-right">Adicionar Exame</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 5%">ID</th>
                <th style="width: 70%">Nome</th>
                <th style="width: 10%">Arquivo</th>
                <th style="width: 15%">Ação</th>
            </tr>
            @foreach($exames as $exame)
            <tr>
                <td>{{$exame->id}}</td>
                <td>{{$exame->nome}}</td>
                <td><a href="/admin/exame/{{$exame->id}}/download"><i class="fa fa-download"></i></a></td>
                <td>
                    <a href="/admin/exame/{{$exame->id}}/editar" class="btn btn-primary">Editar</a>
                    <a href="/admin/exame/{{$exame->id}}/excluir" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            {!! $exames->links() !!}
        </ul>
    </div>
</div>
@endsection