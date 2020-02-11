$(document).ready(function () {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $('.location_from').on('input', function () {
        // do ajax to search for the right airport
        if ($('.location_from').val().length < 3) {
            return;
        }
        searchLocation("location_from");
    });
    $('.location_to').on('input', function () {
        // do ajax to search for the right airport
        if ($('.location_to').val().length < 3) {
            return;
        }
        searchLocation("location_to");
    });

    function searchLocation(input_field) {
        $('.' + input_field + '_suggestion_container').css({
            'display': 'block'
        });
        $.ajax({
            type: 'POST',
            url: '/search-place',
            data: {
                'location': $('.' + input_field).val(),
                'field': input_field
            },
            success: function (msg) {
                if (input_field === "location_from") {
                    $('.location_from_suggestion_container').html(msg);
                } else {
                    $('.location_to_suggestion_container').html(msg);
                }
            },
            error: function (err) {
                console.log(err);
            }
        });
    }
});
