$(function () {
    $('body').on('submit', 'form', function () {
        const dataparam = $(this).serialize();
        $.ajax({
            type: 'POST',
            async: true,
            url: `${include_path}ajax/formularios.php`,
            data: dataparam,
            datatype: 'json',
            cache: true,
            global: false,
            success: function (data) {
                if (data == '{"Success":"true"}') {
                    alert('Email foi enviado com sucesso!');
                } else {
                    alert('Algo deu errado no envio do email!');
                }
            }
        }).fail(function (jqXHR, textStatus) {
            console.log("Request failed: " + textStatus);
        }).always(function () {
            console.log("completou");
        });
        return false;
    });
});