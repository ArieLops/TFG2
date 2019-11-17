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
@stop