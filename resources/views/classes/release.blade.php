@extends('common.master')

@section('content')


    <div class="page page-current page-release">
        <header>
            <p class="padding-lr75">

                @can("is_registed")
                    <a href="/appointments" class="fl iconfont icon-biao"></a>发布
                    <a href="/posts/create"
                       data-modal="modal-1"
                       class="md-trigger iconfont icon-bianjiedit26 fr"></a>
                    @else
                    发布
                @endcan
            </p>
            <div class="buttons-tab">
                <a href="#tab1" class="tab-link active button"><span>全部</span></a>
                <a href="#tab2" class="tab-link button"><span>课程</span></a>

            </div>
        </header>

        <div class="content native-scroll" style="top: 3.5rem;bottom: 2.5rem;">
            <div class="tabs">
                <div id="tab1" class="tab active">
                    <div class="content-block">
                        <div class="list-block">
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
                </div>

                <div id="tab2" class="tab">
                    <div class="content-block">
                        <div class="latest_release">
                            <div class="card">
                                <div class="list-block media-list">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media">
                                                课程
                                            </div>
                                            <div class="item-inner">
                                                <div class="item-title-row">
                                                    <div class="item-title">
                                                        <p>PHP零基础入门教程</p>
                                                        <p class="font-55col">语法吸收了C语言，Java和Perl的特点，利于学习..</p>
                                                    </div>
                                                </div>
                                                <div class="item-subtitle">
                                                    <p class="font-6"><span
                                                                class="iconfont icon-xueshimao-shi"></span><span
                                                                class="col-1ed margin-l2">语言</span><span
                                                                class="margin-lr5">PHP</span><span
                                                                class="col-chen">￥500</span>每小时</p>
                                                    <p class="font-6">150<span
                                                                class="col-hui margin-r5">课时</span>1234<span
                                                                class="col-hui">学员</span></p>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>








            </div>
        </div>

        @include('common.nav')


        <div class="md-overlay"></div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_mpzc1sbdm1xxbt9.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/release.css">
    <link href="css/component.css" rel="stylesheet">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_tbj11ywg8l8wu3di.css">
@endsection

@section('foot')
    <script src="js/classie.js"></script>
    <script src="js/modalEffects.js"></script>
    <script src="js/release.js"></script>
    <script src="js/detail.js"></script>

@endsection