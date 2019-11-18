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
                    <td>{{$avaliacao->id}}</td>
                    <td>{{$avaliacao->user->name}}</td>
                    <td>
                        <a href="/admin/avaliacao/{{$avaliacao->id}}/editar" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="/admin/avaliacao/{{$avaliacao->id}}/excluir" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach  
            </tr>
        </table>
    </div>
</div>
@stop