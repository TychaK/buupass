@if(sizeof($airports)>=1)
    @foreach($airports as $airport)
        <li class="">
            {{$airport}}
        </li>
    @endforeach
@endif
