$(document).ready(function () {
    $('body').on('submit', 'form', function () {
        const dataparam = $(this).serialize();
        $.ajax({
            type: 'POST',
            async: true,
            url: './forms/forms.php',
            data: dataparam,
            datatype: 'json',
            cache: true,
            global: false,
            success: function (data) {
                if (data == 'success') {
                    console.log(data);
                } else {
                    console.log(data);
                }

            }
        })
        return false;
    })
})