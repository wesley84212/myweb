$(document).ready(function () {

    $('#search').click(function () {
        $.ajax({
            method: 'POST',
            url: 'http://' + base_url + '/mvc/get_search',
            dataType: 'JSON',
            data: { type: 'get' },
            success: function (data) {
                $('#myDiv').html('<iframe id="test" src=' + data.url_1 + ' height="500px" width="500px"></iframe>')
                $('#myDiv_2').html('<iframe id="test" src=' + data.url_2 + ' height="500px" width="500px"></iframe>')
            },
            error: function () {
                alert('error');
            }
        });
    });
});
