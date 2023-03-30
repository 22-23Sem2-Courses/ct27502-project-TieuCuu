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


    $('#email').keyup(function () {
        var email = $(this).val();
        $.post("./Ajax/checkUserEmail", { email }, function (data) {

            if (data === 'true') {
                $('#messageEm').html('Username exist!');
                $('#messageEm').addClass('invalid-feedback');
                $('#email').addClass('is-invalid');
            } else {
                $('#messageEm').html('');
                $('#email').removeClass('is-invalid');
                $('#messageEm').addClass('valid-feedback');
                $('#email').addClass('is-valid');

            }
        });
    })
})


