$(function(){
    //Mascaras
    $('.data').mask('00/00/0000');
    $('.telefone').mask('000000000');
    $('.cpf').mask('00000000000', {reverse: true});

    $('.selectPesquisa').select2()

    $('.dataUnica').datepicker({
        autoclose: true
    })

    $('.dataRange').daterangepicker({
        "locale": {
            "format": "DD/MM/YYYY",
            "separator": " - ",
            "applyLabel": "Aplicar",
            "cancelLabel": "Cancelar",
            "fromLabel": "De",
            "toLabel": "Para",
            "customRangeLabel": "Custom",
            "daysOfWeek": [
                "D",
                "S",
                "T",
                "Q",
                "Q",
                "S",
                "S"
            ],
            "monthNames": [
            "Janeiro",
            "Fevereiro",
            "Março",
            "Abril",
            "Maio",
            "Junho",
            "Julho",
            "Agosto",
            "Setembro",
            "Outubro",
            "Novembro",
            "Dezembro"
            ],
        "firstDay": 1
        }
    });
});