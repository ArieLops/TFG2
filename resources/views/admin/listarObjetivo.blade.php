@extends('adminlte::page')

@section('title', 'Listar Objetivos')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listar Objetivos</h3>
        <a href="{{route('adicionarObjetivo')}}" class="btn btn-info btn-sm pull-right">Adicionar Objetivos</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 5%">ID</th>
                <th style="width: 70%">Nome</th>
                <th>Ação</th>
            </tr>
            @foreach($objetivos as $objetivo)
            <tr>
                <td>{{$objetivo->id}}</td>
                <td>{{$objetivo->nome}}</td>
                <td>
                    <a href="/admin/objetivo/{{$objetivo->id}}/editar" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                    <a href="/admin/objetivo/{{$objetivo->id}}/excluir" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            {!! $objetivos->links() !!}
        </ul>
    </div>
</div>
@endsection