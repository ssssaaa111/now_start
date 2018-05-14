@foreach($post->comments->sortByDesc('updated_at') as $item)
    <li>
        <div class="dynam-tx">
            <img src="{{$item->user->avatar}}">
        </div>
        <div class="dynam-body">
            <p class="dynam-name">{{$item->user->name}}</p>
            <p class="dynam-text">{{$item->body}}</p>

            <div class="comment-al">
                @can('can-reply', $post)
                    <p class="dynam-time">{{$item->created_at->diffForHumans()}}<img class="comm-img"
                                                                                     src="/images/comm.png"></p>

                    <div class="menu">
                        <span class="iconfont icon-dianzan">点赞</span>
                        <span class="iconfont icon-yipinglun">评论</span>
                    </div>
                @endcan
                @foreach($item->replies as $reply)
                        <div class="box-pl">
                            <p><a class="col-3f5">{{App\User::find($reply->user_id)->name}}：</a>{{$reply->body}}</p>
                        </div>
                @endforeach
            </div>
        </div>
    </li>
@endforeach