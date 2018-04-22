@foreach($post->comments as $item)
    <li>
        <div class="dynam-tx">
            <img src="{{$item->user->avatar}}">
        </div>
        <div class="dynam-body">
            <p class="dynam-name">{{$item->user->name}}</p>
            <p class="dynam-text">{{$item->body}}</p>
            <p class="dynam-time">{{$item->created_at->diffForHumans()}}</p>
        </div>
    </li>
@endforeach