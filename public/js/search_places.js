$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.location_from').on('input', function () {
        // do ajax to search for the right airport
        if ($('.location_from').val().length < 3) {
            return
        }
        $.ajax({
            type: 'POST',
            url: '/search-place',
            data: {
                'location_from': $('.location_from').val()
            },
            success: function (msg) {
                console.log(msg);
            },
            error: function (err) {
                console.log(err);
            }
        });
    })
});
