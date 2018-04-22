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
                                <div class="md-content">
                                    <p class="modal-time"><a class="icon icon-left fl" id="last-week"></a><span
                                                class="time-now">加载失败...</span><a class="icon icon-right fr"
                                                                                  id="next-week"></a></p>
                                    <select id="select_id">
                                        <option value="-12">UTC-12(IDL-国际换日线)</option>
                                        <option value="-11">UTC-11 ( MIT - 中途岛标准时间)</option>
                                        <option value="-10">UTC-10（HST - 夏威夷-阿留申标准时间）</option>
                                        <option value="-9">UTC-9（AKST - 阿拉斯加标准时间）</option>
                                        <option value="-8">UTC-8（PST - 太平洋标准时间）</option>
                                        <option value="-7">UTC-7（MST - 北美山区标准时间）</option>
                                        <option value="-6">UTC-6（CST - 北美中部标准时间）</option>
                                        <option value="-5">UTC-5（EST - 北美东部标准时间）</option>
                                        <option value="-4">UTC-4（AST - 大西洋标准时间）</option>
                                        <option value="-3">UTC-3 ( SAT - 南美标准时间 )</option>
                                        <option value="-2">UTC-2 ( BRT - 巴西时间)</option>
                                        <option value="-1">UTC-1 ( CVT - 佛得角标准时间 )</option>
                                        <option value="0">UTC（WET - 欧洲西部时区，GMT - 格林威治标准时间）</option>
                                        <option value="+1">UTC+1（CET - 欧洲中部时区）</option>
                                        <option value="+2">UTC+2（EET - 欧洲东部时区）</option>
                                        <option value="+3">UTC+3（MSK - 莫斯科时区）</option>
                                        <option value="+4">UTC+4 ( META - 中东时区A )</option>
                                        <option value="+5">UTC+5 ( METB - 中东时区B )</option>
                                        <option value="+6">UTC+6 ( BHT - 孟加拉标准时间 )</option>
                                        <option value="+7">UTC+7 ( IST - 中南半岛标准时间 )</option>
                                        <option value="+8" selected="selected">UTC+8（EAT - 东亚标准时间/中国标准时间</option>
                                        <option value="+9">UTC+9（FET- 远东标准时间）</option>
                                        <option value="+9.5">UTC+9:30（ACST - 澳洲中部标准时间）</option>
                                        <option value="+10">UTC+10（AEST - 澳洲东部标准时间）</option>
                                        <option value="+10.5">UTC+10:30 ( FAST - 澳洲远东标准时间）</option>
                                        <option value="+11">UTC+11 ( VTT - 瓦努阿图标准时间 )</option>
                                        <option value="+11.5">UTC+11:30 ( NFT - 诺福克岛标准时间 )</option>
                                        <option value="+12">UTC+12（PSTB - 太平洋标准时间B）</option>
                                        <option value="+13">UTC+13（PSTC - 太平洋标准时间C）</option>
                                        <option value="+14">UTC+14（PSTD - 太平洋标准时间D）</option>
                                    </select>
                                    <div class="time-list">
                                        <ul id="monitor">
                                            <li class="day-01">
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
                                            <li class="day-02">
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
                                            <li class="day-03">
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
                                            <li class="day-04">
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
                                            <li class="day-05">
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
                                            <li class="day-06">
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
                                            <li class="day-07">
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
                                        </ul>
                                    </div>
                                </div>
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
@endsection