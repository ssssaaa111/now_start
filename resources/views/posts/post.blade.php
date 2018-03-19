<div class="card mb-3">
    <img class="card-img-top" src="img/test.jpg" alt="Card image cap">
    <div class="card-body">
        <div class="alert alert-success" role="alert">
            <h4 class="alert-heading">价格：￥{{$post->price}}</h4>
            <p>开始时间：{{$post->start_time}}</p>
            <p>时长：{{$post->period}}分钟</p>
            <p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
            <p class="card-text"><small class="text-muted">{{$post->user->name}}创建于：{{$post->created_at->toFormattedDateString()}}</small></p>
            <a href="posts/{{$post->id}}" class="btn btn-primary">去预定</a>
        </div>
    </div>
</div>
