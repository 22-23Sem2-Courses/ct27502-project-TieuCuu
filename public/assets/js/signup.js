console.log($(".terms"));
$(".terms").prop('checked', true);

$(function () {
    $('#username').keyup(function () {
        var username = $(this).val();
        $.post("./Ajax/checkUsername", { username }, function (data) {
            if (data) {
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