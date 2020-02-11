$(document).ready(function () {
    $('.location_from').on('input', function () {
        // do ajax to search for the right airport
        if ($('.location_from').val().length < 3) {
            return
        }
        $.ajax({
            type: 'POST',
            location: '',
            data: {
                location_from: $('.location_from').val()
            },
            success: function (msg) {

            },
            error: function (err) {
                console.log(err);
            }
        });
    })
});
