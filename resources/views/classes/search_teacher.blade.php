@extends('common.master')

@section('content')
    <div id="search-tea" class="page page-seatea ">
        <header>
            <a class="iconfont icon-fanhui margin-l75 back" href=""></a>
            <form method="post" action="/search_teacher">
                {{ csrf_field() }}
                <input type="text" name="body" class="sear-text" placeholder="搜索" autofocus>
                <input type="submit" class="sear-sum" value="">
            </form>
            <dis class="sele-ul buttons-tab">
                <a href="#tab1" class="tab-link button">语种 <span class="icon icon-down"></span></a>
                <a href="#tab2" class="tab-link button"> 国家<span class="icon icon-down"></span></a>
                <a href="#tab3" class="tab-link button"> 价格 <span class="icon icon-down"></span></a>
                <a href="#tab4" class="tab-link button">热度 <span class="icon icon-down "></span></a>
            </dis>

            <div class="tabs">
                <div id="tab1" class="tab">
                    <div class="content-block">
                        <ul>
                            <li id="language" value="0">全部</li>
                            @foreach($language as $item)
                                <li id="language" value="{{$item['language']}}">{{$item['language']}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="tab2" class="tab">
                    <div class="content-block">
                        <ul>
                            <li id="country" value="0">全部</li>
                            @foreach($country as $item)
                                <li id="country" value="{{$item['country']}}">{{$item['country']}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="tab3" class="tab">
                    <div class="content-block">
                        <ul>
                            <li id="hourly_rate" value="0">全部</li>
                            <li id="hourly_rate" value="0">$100以内</li>
                            <li id="hourly_rate" value="1">$100~$200</li>
                            <li id="hourly_rate" value="2">$200以上</li>
                        </ul>
                    </div>
                </div>
                <div id="tab4" class="tab">
                    <div class="content-block">
                        <ul>
                            <li id="hot" value="1">从高到低</li>
                            <li id="hot" value="0">从低到高</li>
                        </ul>
                    </div>
                </div>
            </div>

        </header>

        <div class="content" style="top: 76.2px;bottom: 0;">
            <div class="latest_release">
                <div class="card">
                    <div class="list-block media-list">
                        <ul>
                            @foreach($posts as $post)
                                @include('common.lesson')
                            @endforeach

                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_mpzc1sbdm1xxbt9.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/release.css">
    <link href="css/component.css" rel="stylesheet">
@endsection

@section('foot')
    <script src="js/index.js"></script>
    <script src="js/release.js"></script>
    <script>
        $('div.content-block li').on('click', function () {
            var value = $(this).attr('value');
            var attri = $(this).attr('id');
            location.href = "search_teacher?" + attri + "=" + value;
        });
    </script>

@endsection
