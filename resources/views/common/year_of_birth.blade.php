    <option value="0">Choose...</option>
    @foreach(range(2000,1920,-1) as $item)
        <option value="{{$item}}"
                @if($info['year_of_birth'] == $item)
                selected
                @endif
        > {{$item}} </option>
        @endforeach
