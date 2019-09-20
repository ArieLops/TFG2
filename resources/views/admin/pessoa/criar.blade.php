@extends('adminlte::page')

@section('title', 'Adicionar Pessoa')

@section('content')
<div class="row">
    <div class="col-lg-12">
        @include('includes.formErros')
        @include('includes.mensagemErros')
        <div class="box box-danger">
            <div class="box-header with-border">
                <h3 class="box-title">Adicionar Pessoa</h3>
                <a href="{{route('listarPessoa')}}" class="btn btn-info btn-sm pull-right">Listar Pessoas</a>
            </div>
            <div class="box-body">
                <form action="{{route('salvarPessoa')}}" id="formPessoa" method="POST" autocomplete="off">
                    @csrf
                    <div class="box-body">
                        @include('admin.pessoa.formulario')
                    </div>
                    <div class="box-footer">
                        @include('includes.botaoFormCriar')
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
    //Mascaras
    $(document).ready(function(){
        $('.data').mask('00/00/0000');
        $('.telefone').mask('000000000');
        $('.cpf').mask('00000000000', {reverse: true});
    });

    //Validações
    $(document).ready(function() {
        $('#formPessoa').validate({
            rules: {
                nome: {
                    required: true,
                    maxlength: 50
                },
                email: {
                    required: true,
                    email: true
                },
                dataNascimento: {
                    required: true
                },
                sexo: {
                    required: true
                },
                telefone: {
                    required: true,
                    maxlength: 9
                },
                cpf: {
                    required: true,
                    maxlength: 11
                },
                rg: {
                    required: true,
                    maxlength: 10
                },
                tipo: {
                    required: true
                },
            },
            messages: {
                nome: {
                    required: "Nome é um campo obrigatório.",
                    maxlength: "Você excedeu o tamanho de 50 caracteres."
                },
                email: {
                    required: "Email é um campo obrigatório.",
                },
                dataNascimento: {
                    required: "Data de nascimento é um campo obrigatório.",
                },
                sexo: {
                    required: "Sexo é um campo obrigatório.",
                },
                telefone: {
                    required: "Telefone é um campo obrigatório.",
                    maxlength: "Você excedeu o tamanho de 9 caracteres."
                },
                cpf: {
                    required: "CPF é um campo obrigatório.",
                    maxlength: "Você excedeu o tamanho de 11 caracteres."
                },
                rg: {
                    required: "RG é um campo obrigatório.",
                    maxlength: "Você excedeu o tamanho de 10 caracteres."
                },
                tipo: {
                    required: "Tipo é um campo obrigatório.",
                },
            }
        });
    });
</script>
@stop