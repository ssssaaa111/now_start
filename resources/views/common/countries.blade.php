<option value="">Choose...</option>
@foreach($countries as $country)
    <option
    @if($info['country'] == $country)
        selected
        @endif
    >{{$country}}</option>
@endforeach