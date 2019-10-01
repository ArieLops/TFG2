$(function(){
    $('.validacao').validate({
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