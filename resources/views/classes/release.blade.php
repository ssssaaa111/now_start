@extends('common.master')

@section('content')


    <div class="page page-current page-release">
        <header>
            <p class="padding-lr75"><span class="fl iconfont icon-biao"></span>发布<a href="javascript:;"
                                                                                    data-modal="modal-1"
                                                                                    class="md-trigger iconfont icon-bianjiedit26 fr"></a>
            </p>
            <div class="buttons-tab">
                <a href="#tab1" class="tab-link active button"><span>全部</span></a>
                <a href="#tab2" class="tab-link button"><span>课程</span></a>
                <a href="#tab3" class="tab-link button"><span>资料</span></a>
                <a href="#tab4" class="tab-link button"><span>老师</span></a>
                <a href="#tab5" class="tab-link button"><span>求解</span></a>
                <a href="#tab6" class="tab-link button"><span>分享</span></a>
                <a href="#tab7" class="tab-link button"><span>拼课</span></a>
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

                <div id="tab3" class="tab">
                    <div class="content-block">
                        <div class="latest_release">
                            <div class="card">
                                <div class="list-block media-list">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media">
                                                资料
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

                <div id="tab4" class="tab">
                    <div class="content-block">
                        <div class="latest_release">
                            <div class="card">
                                <div class="list-block media-list">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media">
                                                老师
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

                <div id="tab5" class="tab">
                    <div class="content-block">
                        <div class="latest_release">
                            <div class="card">
                                <div class="list-block media-list">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media">
                                                求解
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

                <div id="tab6" class="tab">
                    <div class="content-block">
                        <div class="latest_release">
                            <div class="card">
                                <div class="list-block media-list">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media">
                                                分享
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

                <div id="tab7" class="tab">
                    <div class="content-block">
                        <div class="latest_release">
                            <div class="card">
                                <div class="list-block media-list">
                                    <ul>
                                        <li class="item-content">
                                            <div class="item-media">
                                                拼课
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

        <div class="md-modal md-effect-1" id="modal-1">
            <div class="md-content">
                <h5>我的课时表<span class="md-close">完成</span></h5>
                <p class="modal-time"><a class="icon icon-left fl" id="last-week"></a><span
                            class="time-now">2018-04-07</span><a class="icon icon-right fr" id="next-week"></a></p>
                <select id="select_id">
                    @foreach($tzlist as $item)
                        <option value="{{$item}}">{{$item}}</option>
                        @endforeach
                </select>
                <div class="time-list">
                    <ul id="monitor">
                        <li class="day-01">
                            <span class="col-000">星期日</span>
                            <span class="col-000 marbot-2  month_now">9</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span class="col-faa">12:00</span>
                            <span class="col-eee">12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span class="col-eee">12:00</span>
                        </li>
                        <li class="day-02">
                            <span class="col-000">星期一</span>
                            <span class="col-000 marbot-2 month_now">9</span>
                            <span class="col-faa">12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span class="col-eee">12:00</span>
                            <span>12:00</span>
                            <span class="col-faa">12:00</span>
                            <span>12:00</span>
                        </li>
                        <li class="day-03">
                            <span class="col-000">星期二</span>
                            <span class="col-000 marbot-2  month_now">9</span>
                            <span class="col-faa">12:00</span>
                            <span>12:00</span>
                            <span class="col-faa">12:00</span>
                            <span>12:00</span>
                            <span class="col-eee">12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                        </li>
                        <li class="day-04">
                            <span class="col-000">星期三</span>
                            <span class="col-000 marbot-2  month_now">9</span>
                            <span>12:00</span>
                            <span class="col-faa">12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span class="col-eee">12:00</span>
                            <span class="col-faa">12:00</span>
                        </li>
                        <li class="day-05">
                            <span class="col-000">星期四</span>
                            <span class="col-000 marbot-2  month_now">9</span>
                            <span>12:00</span>
                            <span class="col-faa">12:00</span>
                            <span class="col-eee">12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                        </li>
                        <li class="day-06">
                            <span class="col-000">星期五</span>
                            <span class="col-000 marbot-2  month_now">9</span>
                            <span>12:00</span>
                            <span class="col-faa">12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span class="col-eee">12:00</span>
                        </li>
                        <li class="day-07">
                            <span class="col-000">星期六</span>
                            <span class="col-000 marbot-2  month_now">9</span>
                            <span class="col-faa">12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span>12:00</span>
                            <span class="col-eee">12:00</span>
                            <span>12:00</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>

        <div class="md-overlay"></div>
    </div>
@endsection

@section('head')
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="css/release.css">
    <link href="css/component.css" rel="stylesheet">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_mpzc1sbdm1xxbt9.css">
@endsection

@section('foot')
    <script src="js/classie.js"></script>
    <script src="js/modalEffects.js"></script>
    <script src="js/release.js"></script>
    <script src="js/detail.js"></script>

@endsection