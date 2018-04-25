@foreach($posts as $k=>$post)
    <li class="teacher_0{{$k+1}}">
        <a class="external" href="/posts/{{$post->id}}">
            <img src={{$post->user->avatar ?? "images/index-teacher.png" }}>
            <span>{{$post->user->name}}</span>
        </a>
    </li>
@endforeach