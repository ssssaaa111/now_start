@extends('common.master')

@section('content')
    <div class="page page-current page-details">
        <header>
            <p><a class="icon icon-left "></a> <a class="fr iconfont icon-email"></a></p>
        </header>

        <div class="content native-scroll" style="top: 2.5rem;bottom: 2.5rem;">
            <div class="details-body">
                <div class="det-msg">
                    <div class="det-img">
                        <img src="{{$post->user->avatar ?? '/images/index-teacher.png'}}">
                    </div>
                    <ul>
                        <li><span class="iconfont icon-wode "></span><span class="fr">{{$post->user->name}}</span></li>
                        <li><span class="iconfont icon-diqiu "></span><span class="fr">{{$post->nation}}</span></li>
                        <li><span class="iconfont icon-maozi "></span><span class="fr">{{$post->subject}}</span></li>
                        <li><span class="iconfont icon-shu "></span><span class="fr">{{$post->subject}}</span></li>
                    </ul>
                </div>
                <div class="det-js">
                    <h5>自我介绍</h5>
                    <div class="det-text">
                        <p>{{$post->body}}</p>
                    </div>
                    <iframe width="560" height="315"
                            src="https://www.youtube.com/embed/YUbno3rGZz0?rel=0&amp;showinfo=0" frameborder="0"
                            allow="autoplay; encrypted-media" allowfullscreen></iframe>
                </div>
            </div>

            <div class="det-tab">
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