$(function() {

});


$(document).on('keyup', '#txt_origem', (e) => {
    let valor = $('#txt_origem');
    let origem = $('#select_moeda_origem option:selected');
    let destino = $('#select_moeda_destino option:selected');
    if (typeof valor.val() != 'undefined' && valor.val() != '' && valor.val() != null) {
        if (typeof origem.val() != 'undefined' && origem.val() != '' && origem.val() != null &&
            typeof destino.val() != 'undefined' && destino.val() != '' && destino.val() != null) {
            $('#select_moeda_destino').converter(
                $('#select_moeda_origem option:selected').val(),
                $('#select_moeda_destino option:selected').val(),
                $('#txt_origem').val()
            );
        }
    }
});


$(document).on('change', '#select_moeda_origem', () => {
    let destino = $('#select_moeda_destino option:selected');
    if (typeof destino.val() != 'undefined' && destino.val() != '' && destino.val() != null) {
        $('#select_moeda_destino').converter(
            $('#select_moeda_origem option:selected').val(),
            $('#select_moeda_destino option:selected').val(),
            $('#txt_origem').val()
        );
    }
});


$(document).on('change', '#select_moeda_destino', () => {
    $('#select_moeda_destino').converter(
        $('#select_moeda_origem option:selected').val(),
        $('#select_moeda_destino option:selected').val(),
        $('#txt_origem').val()
    );
});

function formatarMoedaBr(valor, moeda) {
    let formato = parseFloat(valor);
    return formato.toLocaleString('pt-BR', { style: 'currency', currency: moeda });
}

$.fn.extend({
    select_moeda: function(field){
        let moeda = $(this);
        $('#' + field).html(moeda.find(':selected').data('simbol'));
    },

    converter: (origem, destino, valor) => {

        $.ajax({
            url: '/converter',
            method: 'POST',
            data: {
                _token: $('#_token').val(),
                origin: origem,
                destiny: destino,
                value: valor
            }
        }).done((response) => {
            $('#txt_destino').val(formatarMoedaBr(response, destino));
        });
    }
});
