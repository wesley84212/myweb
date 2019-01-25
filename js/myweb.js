$(document).ready(function () {

    $('#search').click(function () {
        var account = $('#account').val();
        var password = $('#password').val();
        $.ajax({
            method: 'POST',
            url: 'http://' + base_url + '/mvc/login',
            dataType: 'JSON',
            data: {
                account: account,
                password: password
            },
            success: function (data) {
                alert(data.message)
            },
            error: function () {
                alert('error');
            }
        });
    });
});
