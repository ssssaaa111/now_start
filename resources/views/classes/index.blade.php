@extends('common.master')

@section('content')
    <div id="index" class="page page-index page-current">
        <header>
            <img src="images/index-logo.png" class="logo">
            @guest
                <div class="fr text-cen">
                    <a href="login" class="external" style="display: block">
                        <i class="icon iconfont icon-wode"></i>
                        <p>未登录</p>
                    </a>
                </div>
            @endguest
        </header>

        <div class="content native-scroll" style="top: 2.2rem;bottom: 2.5rem">
            <!--轮播图 -->
            @include('classes.scroll_pic')


            <div class="index_search">
                <ul>
                    @include('classes.search_block')
                </ul>
            </div>

            <div class="star_teacher">
                <p class="line-h2"><span>—</span> 今日明星老师 <span>—</span></p>
                <ul>
                    @include('classes.star_teachers')
                </ul>
            </div>

            <div class="star_student star_teacher">
                <p class="line-h2"><span>—</span> 今日明星学生 <span>—</span></p>
                <ul>
                    @include('classes.star_teachers')
                </ul>
            </div>

            <div class="be_teacher">
                <img src="images/be-teacher.png">
                <p class="font-7b">成为一名西语老师</p>
                <p class="font-6">拥有稳定的客户群，运用您的知识赚钱。注册并开始您的教书生涯方便且简单</p>
                <a>成为一名老师</a>
            </div>

            <div class="latest_release">
                <div class="card">
                    <p class="line-h2"><span>—</span> 最新发布 <span>—</span> <span
                                class="iconfont icon-gengduo-tianchong"></span></p>
                    <div class="list-block media-list">
                        <ul>
                            @include('classes.class_card')
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        @include('common.nav')
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_mpzc1sbdm1xxbt9.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/search.css">
@endsection

@section('foot')
    <script src="js/index.js"></script>
@endsection
