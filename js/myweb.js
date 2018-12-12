$(document).ready(function () {

    $('#search').click(function () {
        $.ajax({
            method: 'POST',
            url: 'http://' + base_url + '/mvc/get_search',
            dataType: 'text',
            data: { type: 'get' },
            success: function (data) {
                alert(data);
            },
            error: function () {
                alert('error');
            }
        });
    });
});
