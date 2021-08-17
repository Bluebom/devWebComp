$(function () {
    $('body').on('submit', 'form', function () {
        const dataparam = $(this).serialize();
        $.ajax({
            beforeSend: function () { 
                loader.style.visibility = 'visible';
             },
            type: 'POST',
            async: true,
            url: `${include_path}ajax/formularios.php`,
            data: dataparam,
            datatype: 'json',
            cache: true,
            global: false,
            success: function (data) {
                if (data == '{"Success":"true"}') {
                    loader.style.visibility = 'hidden';
                    success.style.display = 'inline';
                    setTimeout(() => { 
                        success.style.display = 'none';
                    }, 4000)
                } else {
                    loader.style.visibility = 'hidden';
                    error.style.display = 'inline';
                    setTimeout(() => { 
                        error.style.display = 'none';
                    }, 4000)
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