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
                <th style="width: 40%">Nome</th>
                <th style="width: 40%">Data da realização</th>
                <th style="width: 15%">Arquivo</th>
            </tr>
            @foreach($exames as $exame)
            <tr>
                <td>{{$exame->id}}</td>
                <td></td>
                <td>{{$exame->dataRealizado}}</td>
                <td><a href="/admin/exame/{{$exame->id}}/download" class="btn btn-info"><i class="fas fa-download"></i></a></td>
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