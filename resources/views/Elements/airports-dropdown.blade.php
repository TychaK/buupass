@if(sizeof($airports)>=1)
    @foreach($airports as $airport)
        <li class="">
            <a href="javascript:void(0)" class="dropdown-item"
               onclick="setLocation('{{$airport->code}}','{{$airport->countryCode}}','{{$airport->name}}','{{$field}}')">
                {{$airport->name}}
            </a>
        </li>
    @endforeach
@endif
<script>
    function setLocation(airport_code, country_code, loc, field) {
        if (field === "location_from") {
            $('.location_from').val(loc);
            $('.airport_from_code').val(airport_code);
            $('.loc_from_code').val(country_code);
        } else {
            $('.airport_to_code').val(airport_code);
            $('.loc_to_code').val(country_code);
            $('.location_to').val(loc);
        }
        $("." + field + "_suggestion_container").css({
            'display': 'none'
        });
    }
</script>
