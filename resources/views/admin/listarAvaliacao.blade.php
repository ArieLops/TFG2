@extends('adminlte::page')

@section('title', 'Listar Avaliações')

@section('content')
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Listar Avaliações</h3>
        <a href="{{route('adicionarAvaliacao')}}" class="btn btn-info btn-sm pull-right">Adicionar Avaliação</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
        <table class="table table-bordered table-hover table-striped">
            <tr style="width: 100%">
                <th style="width: 5%">ID</th>
                <th style="width: 35%">Nome</th>
                <th style="width: 20%">Data Inicial</th>
                <th style="width: 20%">Data Final</th>
                <th style="width: 20%">Ação</th>
            </tr>
            @foreach($avaliacoes as $avaliacao)
            <tr>
                <td>{{$avaliacao->id}}</td>
                <td>{{$avaliacao->nome}}</td>
                <td>{{$avaliacao->dataInicial}}</td>
                <td>{{$avaliacao->dataFinal}}</td>
                <td>
                    {{-- <a href="/admin/avaliacao/{{$avaliacao->id}}/editar" class="btn btn-primary">Editar</a> --}}
                    <a href="/admin/avaliacao/{{$avaliacao->id}}/excluir" class="btn btn-danger">Excluir</a>
                </td>
            </tr>
            @endforeach
        </table>
    </div>
    <div class="box-footer clearfix">
        <ul class="pagination pagination-sm no-margin pull-right">
            {!! $avaliacoes->links() !!}
        </ul>
    </div>
</div>
@endsection