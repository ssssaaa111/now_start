@extends('common.master')

@section('content')
    <div class="page page-current page-news">
        <header>
            <p>消息</p>
        </header>

        <div class="content native-scroll" style="top: 2rem">
            <div class="new-lo">
                <a class="external" href="/messages" style="display: block">
                    <div class="new-img"><span class="iconfont icon-xiaoxi2"></span></div>
                    <div class="new-inte">
                        <p>私信</p>
                        <?php $count = Auth::user()->newThreadsCount(); ?>
                        @if($count > 0)
                            <p class="font-6">你有{{ $count }}条私信</p>
                            @else
                            {{--<p class="font-6">私信列表</p>--}}
                        @endif

                    </div>
                    <span class="icon icon-right"></span>
                </a>
            </div>

            <div class="news-list">
                <a class="list-a">通知列表</a>

                    @include('common.message')


            </div>

        </div>
        @include('common.nav')
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_lzx7py1ct4y22o6r.css">
    <link rel="stylesheet" href="css/news.css">
@endsection