@extends('adminlte::page')

@section('title', 'Listar Aparelhos')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listar Exercícios</h3>
        <a href="{{route('adicionarExercicio')}}" class="btn btn-info btn-sm pull-right">Adicionar Exercício</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 5%">ID</th>
                <th style="width: 70%">Nome</th>
                <th>Ação</th>
            </tr>
            @foreach($exercicios as $exercicio)
            <tr>
                <td>{{$exercicio->id}}</td>
                <td>{{$exercicio->nome}}</td>
                <td>
                    <a href="/admin/exercicio/{{$exercicio->id}}/editar" class="btn btn-primary">Editar</a>
                    <a href="/admin/exercicio/{{$exercicio->id}}/excluir" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            {!! $exercicios->links() !!}
        </ul>
    </div>
</div>
@endsection