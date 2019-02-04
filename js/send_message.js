$(document).ready(function () {
    $("#ajax_form").submit(function () {
        var form = $(this);
        var data = form.serialize();
        $.ajax({
            type: 'POST',
            url: 'send.php',
            dataType: 'json',
            data: data,
            complete: function (data) {
                document.getElementById('apply').style.display = 'none';
                document.getElementById('thanks').style.display = 'block';
            }

        });
    return false;
});
})
;