@extends('common.master')

@section('content')
<div class="page page-current page-my">

    <div class="content native-scroll">
        <div class="list-block">
            <ul>
                <li class="item-content item-link">
                    <div class="item-media">
                        <a>
                            <i class="icon icon-f7"></i>
                            <img class="head_por" src="{{Auth::user()->avatar ?? "images/index-teacher.png"}}">
                        </a>
                    </div>

                    <div class="item-inner">
                        <a>
                            <div class="item-title">
                                <p>{{Auth::user()->name}}</p>
                                <p class="color-bbb">查看个人主页或编辑</p>
                            </div>
                            <div class="item-after"></div>
                        </a>
                    </div>
                </li>
                <div class="my_list">
                    <div><a href="my-course.html" external><p class="iconfont icon-759bianjiqi_riqi"></p><p>课程</p></a></div>
                    <div><a><p class="iconfont icon-qianbao"></p><p>钱包</p></a></div>
                    <div><a><p class="iconfont icon-youhuiquan" style="font-size: 1rem"></p><p>优惠券</p></a></div>
                </div>
                <li class="item-content item-link">
                    <a>
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">我的收藏</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li class="item-content item-link">
                    <a>
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">我的评价</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li class="item-content item-link">
                    <a>
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">我的好友</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li class="item-content item-link border-bo">
                    <a class="external" href="/logout">
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">退出登录</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li class="item-content item-link">
                    <a>
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">帮助与反馈</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
                <li class="item-content item-link">
                    <a>
                        <div class="item-media"><i class="icon icon-f7"></i></div>
                        <div class="item-inner">
                            <div class="item-title">设置</div>
                            <div class="item-after"></div>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    @include('common.nav')
</div>
@endsection

@section('head')
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_y0u56j66nnv4e7b9.css">
    <link rel="stylesheet" href="css/my.css">
@endsection