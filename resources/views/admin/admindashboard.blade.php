@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<h1>Dashboard</h1>
@stop

@section('content')
<div class="box">
    <div class="box-body">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-green">
                    <div class="inner">
                        @inject('users', '\App\Http\Models\Users')
                        <h3>{{$users->where('tipo','1')->count()}}</h3>
                        <p>Alunos</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-person-add"></i>
                    </div>
                    <a href="{{route('listarPessoa')}}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-blue">
                    <div class="inner">
                        @inject('exercicios', '\App\Http\Models\Exercicio')
                        <h3>{{$exercicios->count()}}</h3>
                        <p>Exercícios</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-dumbbell"></i>
                    </div>
                    <a href="{{route('listarExercicio')}}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                    @inject('anamneses', '\App\Http\Models\Anamnese')
                    <h3>{{$anamneses->count()}}</h3>
                    <p>Anamneses</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-clipboard"></i>
                    </div>
                    <a href="{{route('adicionarAnamnese')}}" class="small-box-footer">Cadastrar <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-xs-6">
                <div class="small-box bg-red">
                    <div class="inner">
                    @inject('treinos', '\App\Http\Models\Treino')
                    <h3>{{$treinos->count()}}</h3>
                    <p>Treinos</p>
                    </div>
                    <div class="icon">
                        <i class="fas fa-running"></i>
                    </div>
                    <a href="{{route('adicionarTreino')}}" class="small-box-footer">Cadastrar <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Avaliações Físicas -->
<!--
<div class="col-md-6">
    <div class="box box-info">
        <div class="box-header with-border">
        <h3 class="box-title">Avaliações Físicas</h3>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
        </div>
    </div>
    <div class="box-body">
      <div class="table-responsive">
        <table class="table no-margin">
          <thead>
          <tr>
            <th>Praticante</th>
            <th>Ação</th>
          </tr>
          </thead>
          <tbody>
            <tr>
                <td>OR9842</td>
                <td><a href="/admin/pessoa/avaliacao" class="btn btn-primary"><i class="fas fa-eye"></i></a></td>
            </tr>
          </tbody>
        </table>
      </div>      
    </div>
    </div>
</div>
-->
@stop