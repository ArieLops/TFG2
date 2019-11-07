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
                required: true,
            },
            massa: {
                required: true,
            },
            estatura: {
                required: true,
            },
            peitoral: {
                required: true,
            },
            axMedio: {
                required: true,
            },
            subEscapular: {
                required: true,
            },
            tricipital: {
                required: true,
            },
            bicipital: {
                required: true,
            },
            supraIliaca: {
                required: true,
            },
            abdominal: {
                required: true,
            },
            coxa: {
                required: true,
            },
            panturrilha: {
                required: true,
            },
            torax: {
                required: true,
            },
            bracoDireito: {
                required: true,
            },
            bracoEsquerdo: {
                required: true,
            },
            antebracoEsquerdo: {
                required: true,
            },
            antebracoDireito: {
                required: true,
            },
            cintura: {
                required: true,
            },
            quadril: {
                required: true,
            },
            coxaDireita: {
                required: true,
            },
            coxaEsquerda: {
                required: true,
            },
            pernaDireita: {
                required: true,
            },
            pernaEsquerda: {
                required: true,
            },
            pernaEsquerda: {
                required: true,
            },
            tags: {
                required: true,
            },
            tagsAparelho: {
                required: true,
            },
            objetivo_id: {
                required: true,
            },
            tipo: {
                required: true,
            },
            sinalID: {
                
            }
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
            massa: {
                required: "Massa é um campo obrigatório",
            },
            estatura: {
                required: "Estatura é um campo obrigatório",
            },
            peitoral: {
                required: "Peitoral é um campo obrigatório",
            },
            axMedio: {
                required: "Axilar Médio é um campo obrigatório",
            },
            subEscapular: {
                required: "Sub Escapular é um campo obrigatório",
            },
            tricipital: {
                required: "Tricipital é um campo obrigatório",
            },
            bicipital: {
                required: "Bicipital é um campo obrigatório",
            },
            supraIliaca: {
                required: "Supra Ilíaca é um campo obrigatório",
            },
            abdominal: {
                required: "Abodminal é um campo obrigatório",
            },
            coxa: {
                required: "Coxa é um campo obrigatório",
            },
            panturrilha: {
                required: "Panturrilha é um campo obrigatório",
            },
            torax: {
                required: "Torax é um campo obrigatório",
            },
            bracoDireito: {
                required: "Braço Direito é um campo obrigatório",
            },
            bracoEsquerdo: {
                required: "Braço Esquerdo é um campo obrigatório",
            },
            antebracoDireito: {
                required: "Antebraço Direito é um campo obrigatório",
            },
            antebracoEsquerdo: {
                required: "Antebraço Esquerdo é um campo obrigatório",
            },
            cintura: {
                required: "Cintura é um campo obrigatório",
            },
            quadril: {
                required: "Quadril é um campo obrigatório",
            },
            coxaDireita: {
                required: "Coxa Direita é um campo obrigatório",
            },
            coxaEsquerda: {
                required: "Coxa Esquerda é um campo obrigatório",
            },
            pernaDireita: {
                required: "Perna Direita é um campo obrigatório",
            },
            pernaEsquerda: {
                required: "Perna Esquerda é um campo obrigatório",
            },
            tags: {
                required: "Tags é um campo obrigatório",
            },
            tagsAparelho: {
                required: "Tags é um campo obrigatório",
            },
            objetivo_id: {
                required: "Objetivo é um campo obrigatório",
            },
            tipo: {
                required: "Tipo é um campo obrigatório",
            },
        }
    });
});