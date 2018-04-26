@extends('common.master')

@section('content')
    <div id="search-tea" class="page page-seatea ">
        <header>
            <a class="iconfont icon-fanhui margin-l75 back" href="#index"></a>
            <form>
                <input type="text" class="sear-text" placeholder="搜索老师" autofocus>
                <input type="submit" class="sear-sum" value="">
            </form>
            <dis class="sele-ul buttons-tab">
                <a href="#tab1" class="tab-link button">语种 <span class="icon icon-down"></span></a>
                <a href="#tab2" class="tab-link button"> 国家<span class="icon icon-down"></span></a>
                <a href="#tab3" class="tab-link button"> 价格<span class="icon icon-down"></span></a>
                <a href="#tab4" class="tab-link button">热度 <span class="icon icon-down "></span></a>
            </dis>

            <div class="tabs">
                <div id="tab1" class="tab">
                    <div class="content-block">
                        <ul>
                            <li>中国</li>
                            <li>美国</li>
                            <li>日本</li>
                            <li>欧洲</li>
                        </ul>
                    </div>
                </div>
                <div id="tab2" class="tab">
                    <div class="content-block">
                        <ul>
                            @foreach($country as $item)
                                <li>{{$item['nation']}}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div id="tab3" class="tab">
                    <div class="content-block">
                        <ul>
                            <li>法国</li>
                            <li>美国</li>
                            <li>欧洲</li>
                        </ul>
                    </div>
                </div>
                <div id="tab4" class="tab">
                    <div class="content-block">
                        <ul>
                            <li>￥111</li>
                            <li>￥20</li>
                            <li>￥100</li>
                            <li>￥900</li>
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
                            <li class="item-content">
                                <div class="item-media">

                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">
                                            <p>李丽丽 <span class="icon-diqiu iconfont"></span></p>
                                        </div>
                                        <span class="iconfont icon-xing fr margin-r5">4.8</span>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span
                                                    class="col-1ed margin-l2">语言</span><span
                                                    class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时
                                        </p>
                                        <a class="fr font-6 back-1e">预约课程</a>
                                    </div>
                                </div>
                            </li>

                            <li class="item-content">
                                <div class="item-media">

                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">
                                            <p>李丽丽 <span class="icon-diqiu iconfont"></span></p>
                                        </div>
                                        <span class="iconfont icon-xing fr margin-r5">4.8</span>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span
                                                    class="col-1ed margin-l2">语言</span><span
                                                    class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时
                                        </p>
                                        <a class="fr font-6 back-1e">预约课程</a>
                                    </div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-media">

                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">
                                            <p>李丽丽 <span class="icon-diqiu iconfont"></span></p>
                                        </div>
                                        <span class="iconfont icon-xing fr margin-r5">4.8</span>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span
                                                    class="col-1ed margin-l2">语言</span><span
                                                    class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时
                                        </p>
                                        <a class="fr font-6 back-1e">预约课程</a>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_mpzc1sbdm1xxbt9.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/search.css">
@endsection

@section('foot')
    <script src="js/index.js"></script>
    <script src="js/release.js"></script>

@endsection
