@extends('common.master')

@section('content')
    <div class="page page-current page-details">
        <header>
            <p><a href="javascript:history.back()" class="icon icon-left "></a> <a
                        @if(auth()->check())
                        @can("is_chatted_before", $post->user_id)
                        href="/messages/{{ \Cmgmyr\Messenger\Models\Thread::between([auth()->id(), $post->user_id])->first()->id}} "
                        @else
                        href="/messages/create/{{$post->user_id}}"
                        @endcan
                        @endif
                        class="fr iconfont icon-email"></a></p>

        </header>

        <div class="content native-scroll" style="top: 2.5rem;bottom: 2.5rem;">
            <div class="details-body">
                <div class="det-msg">
                    <div class="det-img">
                        <img src="{{$post->user->avatar ?? '/images/index-teacher.png'}}">
                    </div>
                    <ul>
                        <li><span class="iconfont icon-wode "></span><span class="fr tea">{{$post->user->teachers->name}}</span>
                        </li>
                        <li><span class="iconfont icon-diqiu "></span><span class="fr tea">{{$post->user->teachers->country}}</span></li>
                        <li><span class="iconfont icon-maozi "></span><span class="fr tea">{{$post->user->teachers->university}}/{{$post->user->teachers->degree}}</span>
                        </li>
                        <li><span class="iconfont icon-shu "></span><span class="fr tea">{{$post->user->teachers->language}} level:{{$post->user->teachers->lang_level}} ${{$post->user->teachers->hourly_rate}}/hour</span></li>
                    </ul>
                </div>
                <div class="det-js">
                    <h5>自我介绍</h5>
                    <div class="det-text">
                        <p>{{$post->user->teachers->description}}</p>
                    </div>
                    <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/YUbno3rGZz0?rel=0&amp;showinfo=0" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>

                    <h5>教学计划</h5>
                    <div class="det-text">
                        <p>{!! $post->body !!}</p>
                    </div>
                </div>
            </div>

            <div class="det-tab" id="test">
                <div class="buttons-tab">
                    <a href="#tab1" class="tab-link active button">课时表</a>

                    <a href="#tab3" class="tab-link button">学生评价</a>
                </div>
                <div class="content-block">
                    <div class="tabs">
                        <div id="tab1" class="tab active">

                            <div class="content-block">
                                @include('common.calendar')
                            </div>
                        </div>

                        <div id="tab3" class="tab ">
                            @can('can-comment', $post)
                                <div class="card">
                                    <div class="card-block">
                                        <form method="POST" action="/posts/{{$post->id}}/comments">
                                            {{csrf_field()}}
                                            <div class="form-group">
                                                <textarea rows="3" placeholder="发表评论.." name="body"
                                                          style="padding:.5rem;width: 85%;height:3rem;border-top-left-radius: 5px;
                                                          border-bottom-left-radius: 5px;margin: .5rem 0 0 5%;border: 1px solid #eee;
                                                           box-shadow: 1px 1px 1px #eee;">
                                                </textarea>
                                                <button type="submit" class="fr"
                                                        style="color:#fff;text-align:center;width: 10%;margin-top: .5rem;height: 3rem;background: #1ED2AD;border-top-right-radius: 5px;border-bottom-right-radius: 5px;">
                                                    发送
                                                </button>
                                            </div>

                                            <div class="form-group">

                                            </div>
                                        </form>
                                        @include('layouts.errors')
                                    </div>
                                </div>
                            @endcan
                            <div class="content-block">
                                <ul>
                                    @include('common.comment')
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>
            </div>


        </div>


        @include('common.nav')

        <nav class="bar bar-tab bar-pl">
            <input type="text" class="bar-inp">
            <a id="for-xr">发送</a>
        </nav>

    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="//at.alicdn.com/t/font_618936_be3kdw30vxk9y66r.css">
    <link rel="stylesheet" href="/css/details.css">
@endsection

@section('foot')
    <script src="/js/detail.js"></script>
    <script src="/js/release.js"></script>

    @if($toast = session('bill-message'))
        <script>
            $.toast("{{$toast}}");
        </script>
    @endif
@endsection