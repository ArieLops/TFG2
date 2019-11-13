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
                        <p>Alunos cadastrados</p>
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
                        <p>Exercícios cadastrados</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-edit"></i>
                    </div>
                    <a href="{{route('listarExercicio')}}" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <!--<div class="col-lg-3 col-xs-6">
                <div class="small-box bg-yellow">
                    <div class="inner">
                    <h3>0</h3>
                    <p>Avaliações agendadas</p>
                    </div>
                    <div class="icon">
                        <i class="fa fa-fw fa-calendar"></i>
                    </div>
                    <a href="#" class="small-box-footer">Listar <i class="fa fa-arrow-circle-right"></i></a>
                </div>
            </div>-->
        </div>
    </div>
</div>
@stop