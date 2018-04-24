@foreach($appointments as $appointment)
    <div class="list-inte">
        <a class="external" href="/posts/{{$appointment->post->id}}">
            <p class="linehe-1">预约成功通知<span class="font-6 fr">{{$appointment->updated_at->diffForHumans()}}</span></p>
            <p class="font-6">你已成功预约了{{$appointment->post->user->name}}老师的{{$appointment->start_time}}
                的{{$appointment->post->title}}课程，如需更改课程时间，请提前两日进行更改</p>
        </a>
    </div>
@endforeach