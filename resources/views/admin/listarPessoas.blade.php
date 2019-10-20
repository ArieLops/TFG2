@extends('adminlte::page')

@section('title', 'Listar Pessoas')

@section('content_header')
@stop

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listar Pessoas</h3>
        <a href="{{route('adicionarPessoa')}}" class="btn btn-info btn-sm pull-right">Adicionar Pessoa</a>
    </div>
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 5%">ID</th>
                <th style="width: 35%">Nome</th>
                <th style="width: 35%">Tipo</th>
                <th>Ação</th>
            </tr>
            @if($pessoas != NULL)
                @foreach($pessoas as $pessoa)
                <tr>
                    <td>{{$pessoa->id}}</td>
                    <td>{{$pessoa->nome}}</td>
                    <td>{{$pessoa->tipo}}</td>
                    <td>
                        <a href="/admin/pessoa/{{$pessoa->id}}/editar" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="/admin/pessoa/{{$pessoa->id}}/excluir" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach  
            @endif
            </tr>
        </table>
    </div>
</div>
@stop