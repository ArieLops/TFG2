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
                <th style="width: 28,33%">Nome</th>
                <th style="width: 28,33%">Objetivo</th>
                <th style="width: 28,33%">Tipo</th>
                <th style="width: 10%">Ação</th>
            </tr>
            
            @if($users != NULL)
                @foreach($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td></td>
                    <td>{{$user->tipo}}</td>
                    <td>
                        <a href="/admin/pessoa/{{$user->id}}/editar" class="btn btn-primary"><i class="fas fa-edit"></i></a>
                        <a href="/admin/pessoa/{{$user->id}}/excluir" class="btn btn-danger"><i class="fas fa-trash-alt"></i></a>
                    </td>
                </tr>
                @endforeach  
            @endif

            </tr>
        </table>
    </div>
</div>
@stop