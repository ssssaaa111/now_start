<li class="item-content">
    {{--  <div class="item-media">
          <a class="external" href="/posts/{{$post->id}}">
              课程
          </a>
      </div>--}}
    <div class="item-media">
        <a>
            <img src="{{$post->user->avatar}}">
        </a>
    </div>
    <div class="item-inner">
        <div class="item-title-row">
            <div class="item-title">
                <a class="external" href="/posts/{{$post->id}}">
                    <p>{{$post->title}}</p></a>
                <p class="font-55col words-length">{{$post->user->teachers->description ??$post->body}}</p>
            </div>
        </div>
        <div class="item-subtitle">
            <p class="font-6"><a><span class="iconfont icon-xueshimao-shi"></span><span
                            class="col-1ed margin-l2">语言</span></a><a><span class="margin-lr5">{{$post->user->teachers->language??"sp"}}</span></a><a><span
                            class="col-chen">${{$post->user->teachers->hourly_rate ?? 100}}</span> 每小时</a></p>
            <p class="font-6">{{$post->user->teachers->country ?? "Spanish"}}<span class="col-hui margin-r5"> 国家</span>{{rand(1,1000)}}<span
                        class="col-hui"> 学员</span></p>
        </div>
    </div>
    <div class="conte-xr">
        <a
                @can("is_chatted_before", $post->user_id)
                href="/messages/{{ \Cmgmyr\Messenger\Models\Thread::between([auth()->id(), $post->user_id])->first()->id}} "
                @else
                href="/messages/create/{{$post->user_id}}"
                @endcan
                class="iconfont icon-icon--"></a>
        <a href="/posts/{{$post->id}}" class="external padd-5">预定</a>
    </div>
</li>