console.log($(".terms"));

$(".terms").prop('checked', true);

$(function () {
    $('#username').keyup(function () {
        var username = $(this).val();
        $.post("./Ajax/checkUsername", { username }, function (data) {

            if (data === 'true') {
                $('#messageUn').html('Username exist!');
                $('#messageUn').addClass('invalid-feedback');
                $('#username').addClass('is-invalid');
            } else {
                $('#messageUn').html('');
                $('#username').removeClass('is-invalid');
                $('#messageUn').addClass('valid-feedback');
                $('#username').addClass('is-valid');

            }
        });
    })
})


$(function () {

    var timeout = null;

    $('#firstname').keyup(function () {
        clearTimeout(timeout);
        var firstname = $(this).val();

        timeout = setTimeout(function () {
            $.post("./Ajax/validateFirstName", { firstname }, function (data) {
                data = JSON.parse(data);
                //console.log(data['firstnameError'], data['result']);
                if (data['result'] === false) {
                    $('#messageFr').html(data['firstnameError']);
                } else {
                    $('#messageFr').html('');
                }
            });
        }, 200)


        // $.ajax({
        //     url: "./Ajax/validateFirstName",
        //     type: "POST",
        //     data: JSON.stringify({ firstname }),
        //     //dataType: "json",
        //     //contentType: "application/json; charset=utf-8",
        //     success: function (data) {
        //         $('#messageFr').html(data);
        //         console.log('ok');
        //     },
        //     error: function () {
        //         console.log('lỗi');
        //     }
        // });
    })
})