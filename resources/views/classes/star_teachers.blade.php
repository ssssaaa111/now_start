@foreach($posts as $k=>$post)
    <li class="teacher_0{{$k+1}}
            @if($k==1)
               margin-2
            @endif
            ">
        <a class="external" href="/posts/{{$post->id}}">
            <img src={{$post->user->avatar ?? "images/index-teacher.png" }}>
            <span>{{$post->user->name}}</span>
        </a>
    </li>
@endforeach