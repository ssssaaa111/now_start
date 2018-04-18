<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

    <!-- 添加到主屏后的标题（iOS 6 新增） -->
    <meta name="apple-mobile-web-app-title" content="">

    <!-- 是否启用 WebApp 全屏模式，删除苹果默认的工具栏和菜单栏 -->
    <meta name="apple-mobile-web-app-capable" content="yes"/>

    <!--  隐藏状态栏/设置状态栏颜色：只有在开启WebApp全屏模式时才生效。content的值为default | black | black-translucent  -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>

    <!-- 添加到主屏后的标题 -->
    <meta name="apple-mobile-web-app-title" content="标题">

    <!-- 忽略页面中的数字识别为电话，忽略email识别 -->
    <meta name="format-detection" content="telphone=no, email=no"/>

    <!--下面三个是清除缓存 微信浏览器缓存严重又无刷新；这个方法调试的时候很方便-->
    <meta http-equiv="Pragma" content="no-cache">
    <meta http-equiv="Cache-Control" content="no-cache">
    <meta http-equiv="Expires" content="0">
    <title>首页</title>
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <link rel="shortcut icon" href="/favicon.ico">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <link rel="stylesheet" href="https://g.alicdn.com/msui/sm/0.6.2/css/sm.min.css">
    <link rel="stylesheet" href="https://g.alicdn.com/msui/sm/0.6.2/css/sm-extend.min.css">
    <link rel="stylesheet" href="css/common.css">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_fheok2d376d5nrk9.css">
    <link rel="stylesheet" href="css/search.css">
    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_mpzc1sbdm1xxbt9.css">
</head>
<body>
<div class="page-group ">
    <div id="index"       class="page page-index page-current">
        <header>
            <img src="images/index-logo.png" class="logo">
            <div class="fr text-cen">
                <a href="login" style="display: block">
                    <i class="icon iconfont icon-wode"></i>
                    <p>未登录</p>
                </a>
            </div>
        </header>

        <div class="content native-scroll" style="top: 2.2rem;bottom: 2.5rem">
            <!--轮播图 -->
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <a class="swiper-slide"><img src="images/index-swiper01.jpg" alt=""></a>
                    <a class="swiper-slide"><img src="images/index-swiper02.jpg" alt=""></a>
                    <a class="swiper-slide"><img src="images/index-swiper03.jpg" alt=""></a>
                    <a class="swiper-slide"><img src="images/index-swiper04.jpg" alt=""></a>
                    <a class="swiper-slide"><img src="images/index-swiper01.jpg" alt=""></a>
                </div>
                <div class="swiper-pagination"></div>
            </div>

            <div class="index_search">
                <ul>
                    <li>
                        <a href="#search-tea">
                            <img src="images/rele-01.png">
                            <span class="font-75">搜老师</span>
                        </a>
                    </li>
                    <li class="border-1">
                        <a href="#search-stu">
                            <img src="images/rele-02.png">
                            <span class="font-75">搜学生</span>
                        </a>
                    </li>
                    <li>
                        <a href="#search-data">
                            <img src="images/rele-03.png">
                            <span class="font-75">搜资料</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="star_teacher">
                <p class="line-h2"><span>—</span> 今日明星老师 <span>—</span></p>
                <ul>
                    <li class="teacher_01">
                        <a>
                            <img src="images/index-teacher.png">
                            <span>李丽丽</span>
                        </a>
                    </li>
                    <li class="teacher_02 margin-2">
                        <a>
                            <img src="images/index-teacher.png">
                            <span>王阳</span>
                        </a>
                    </li>
                    <li class="teacher_03">
                        <a>
                            <img src="images/index-teacher.png">
                            <span>Deep</span>
                        </a>
                    </li>
                </ul>
            </div>

            <div class="star_student star_teacher">
                <p class="line-h2"><span>—</span> 今日明星学生 <span>—</span></p>
                <ul>
                    <li class="teacher_01">
                        <a>
                            <img src="images/index-teacher.png">
                            <span>张得</span>
                        </a>
                    </li>
                    <li class="teacher_02 margin-2">
                        <a>
                            <img src="images/index-teacher.png">
                            <span>刘牛牛</span>
                        </a>
                    </li>
                    <li class="teacher_03">
                        <a>
                            <img src="images/index-teacher.png">
                            <span>李莉</span>
                        </a>
                    </li>
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
                    <p class="line-h2"><span>—</span> 最新发布 <span>—</span> <span class="iconfont icon-gengduo-tianchong"></span></p>
                    <div class="list-block media-list">
                        <ul>
                            <li class="item-content">
                                <div class="item-media">
                                    <a>
                                        课程
                                    </a>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">
                                            <a>
                                                <p>PHP零基础入门教程</p></a>
                                            <p class="font-55col">语法吸收了C语言，Java和Perl的特点，利于学习..</p>

                                        </div>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><a><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span></a><a><span class="margin-lr5">PHP</span></a><a><span class="col-chen">￥500</span>每小时</p></a>
                                        <p class="font-6">150<span class="col-hui margin-r5">课时</span>1234<span class="col-hui">学员</span></p>
                                    </div>
                                </div>
                            </li>

                            <li class="item-content">
                                <div class="item-media">
                                    <a>
                                        课程
                                    </a>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">
                                            <a>
                                                <p>PHP零基础入门教程</p></a>
                                            <p class="font-55col">语法吸收了C语言，Java和Perl的特点，利于学习..</p>

                                        </div>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><a><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span></a><a><span class="margin-lr5">PHP</span></a><a><span class="col-chen">￥500</span>每小时</p></a>
                                        <p class="font-6">150<span class="col-hui margin-r5">课时</span>1234<span class="col-hui">学员</span></p>
                                    </div>
                                </div>
                            </li>

                            <li class="item-content">
                                <div class="item-media">
                                    <a>
                                        课程
                                    </a>
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">
                                            <a>
                                                <p>PHP零基础入门教程</p></a>
                                            <p class="font-55col">语法吸收了C语言，Java和Perl的特点，利于学习..</p>

                                        </div>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><a><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span></a><a><span class="margin-lr5">PHP</span></a><a><span class="col-chen">￥500</span>每小时</p></a>
                                        <p class="font-6">150<span class="col-hui margin-r5">课时</span>1234<span class="col-hui">学员</span></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <nav class="bar bar-tab">
            <a class="tab-item external active" href="#">
                <span class="iconfont icon-maozi icon"></span>
                <span class="tab-label">首页</span>
            </a>
            <a class="tab-item external" href="release.html">
                <span class="icon icon-paperplane iconfont"></span>
                <span class="tab-label">发布</span>
            </a>
            <a class="tab-item external" href="news.html">
                <span class="icon icon-xiaoxi iconfont"></span>
                <span class="tab-label">消息</span>
                <span class="badge">2</span>
            </a>
            <a class="tab-item external" href="my.html">
                <span class="icon icon-wode iconfont"></span>
                <span class="tab-label">我的</span>
            </a>
        </nav>
    </div>

    <div id="search-tea" class="page page-seatea ">
        <header>
            <a class="iconfont icon-fanhui margin-l75 back" href="#index"></a>
            <form>
                <input type="text" class="sear-text" placeholder="搜索老师" autofocus>
                <input type="submit" class="sear-sum" value="">
            </form>
            <dis class="sele-ul buttons-tab">
                <a href="#tab1" class="tab-link button">国家 <span class="icon icon-down"></span></a>
                <a href="#tab2" class="tab-link button">国家 <span class="icon icon-down"></span></a>
                <a href="#tab3" class="tab-link button">国家 <span class="icon icon-down"></span></a>
                <a href="#tab4" class="tab-link button">课时费 <span class="icon icon-down "></span></a>
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
                            <li>香港</li>
                            <li>澳门</li>
                            <li>日本</li>
                            <li>欧洲</li>
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
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时</p>
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
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时</p>
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
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时</p>
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

    <div id="search-stu" class="page page-seatea ">
        <header>
            <a class="iconfont icon-fanhui margin-l75 back" href="#index"></a>
            <form>
                <input type="text" class="sear-text" placeholder="搜索学生" autofocus>
                <input type="submit" class="sear-sum" value="">
            </form>
            <dis class="sele-ul buttons-tab">
                <a href="#tab5" class="tab-link button">学科<span class="icon icon-down"></span></a>
                <a href="#tab6" class="tab-link button">学习阶段<span class="icon icon-down"></span></a>
                <a href="#tab7" class="tab-link button">年龄 <span class="icon icon-down"></span></a>
                <a href="#tab8" class="tab-link button">课时费 <span class="icon icon-down "></span></a>
            </dis>

            <div class="tabs">
                <div id="tab5" class="tab">
                    <div class="content-block">
                        <ul>
                            <li>PHP</li>
                            <li>Java</li>
                            <li>JS</li>
                            <li>css</li>
                        </ul>
                    </div>
                </div>
                <div id="tab6" class="tab">
                    <div class="content-block">
                        <ul>
                            <li>初级</li>
                            <li>中级</li>
                            <li>高级</li>
                            <li>大佬</li>
                        </ul>
                    </div>
                </div>
                <div id="tab7" class="tab">
                    <div class="content-block">
                        <ul>
                            <li>10-15</li>
                            <li>15-20</li>
                            <li>20-30</li>
                        </ul>
                    </div>
                </div>
                <div id="tab8" class="tab">
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
                                            <p>李丽丽 <span class="margin-l2 backg-1e">入门</span><span class="margin-l2 backg-1e">19岁</span></p>
                                        </div>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-media">
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">
                                            <p>李丽丽 <span class="margin-l2 backg-1e">入门</span><span class="margin-l2 backg-1e">19岁</span></p>
                                        </div>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时</p>
                                    </div>
                                </div>
                            </li>
                            <li class="item-content">
                                <div class="item-media">
                                </div>
                                <div class="item-inner">
                                    <div class="item-title-row">
                                        <div class="item-title">
                                            <p>李丽丽 <span class="margin-l2 backg-1e">入门</span><span class="margin-l2 backg-1e">19岁</span></p>
                                        </div>
                                    </div>
                                    <div class="item-subtitle">
                                        <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div id="search-data" class="page page-data ">
        <header>
            <a class="iconfont icon-fanhui margin-l75 back" href="#index"></a>
            <form>
                <input type="text" class="sear-text" placeholder="搜索资料" autofocus>
                <input type="submit" class="sear-sum" value="">
            </form>
        </header>

        <div class="content" style="top: 42.5px;bottom: 0;">
            <div class="latest_release">
                <div class="card">
                    <p class="line-h2"><span>—</span> 本次搜索结果102结果 <span>—</span></p>
                    <div class="list-block media-list">
                        <ul>
                            <li class="item-content">
                                <a>
                                    <div class="item-media">
                                        <p>1.</p>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-title">
                                                <p>PHP零基础入门教程<span class="fr backg-1e">预览</span></p>
                                                <p class="font-55col">语法吸收了C语言，Java和Perl的特点，利于学习..</p>
                                            </div>
                                        </div>
                                        <div class="item-subtitle">
                                            <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时 <span class="fr margin-l2">李丽丽</span> <img src="images/index-teacher.png"><span></span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="item-content">
                                <a>
                                    <div class="item-media">
                                        <p>11.</p>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-title">
                                                <p>PHP零基础入门教程<span class="fr backg-1e">预览</span></p>
                                                <p class="font-55col">语法吸收了C语言，Java和Perl的特点，利于学习..</p>
                                            </div>
                                        </div>
                                        <div class="item-subtitle">
                                            <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时 <span class="fr margin-l2">李丽丽</span> <img src="images/index-teacher.png"><span></span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>

                            <li class="item-content">
                                <a>
                                    <div class="item-media">
                                        <p>22.</p>
                                    </div>
                                    <div class="item-inner">
                                        <div class="item-title-row">
                                            <div class="item-title">
                                                <p>PHP零基础入门教程<span class="fr backg-1e">预览</span></p>
                                                <p class="font-55col">语法吸收了C语言，Java和Perl的特点，利于学习..</p>
                                            </div>
                                        </div>
                                        <div class="item-subtitle">
                                            <p class="font-6"><span class="iconfont icon-xueshimao-shi"></span><span class="col-1ed margin-l2">语言</span><span class="margin-lr5">PHP</span><span class="col-chen">￥500</span>每小时 <span class="fr margin-l2">李丽丽</span> <img src="images/index-teacher.png"><span></span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script type='text/javascript' src='https://g.alicdn.com/sj/lib/zepto/zepto.min.js' charset='utf-8'></script>
<script type='text/javascript' src='https://g.alicdn.com/msui/sm/0.6.2/js/sm.min.js' charset='utf-8'></script>
<script type='text/javascript' src='https://g.alicdn.com/msui/sm/0.6.2/js/sm-extend.min.js' charset='utf-8'></script>
<script>
    $.config = {
        autoInit: true
    };
    $(".swiper-container").swiper({
        pagination : '.swiper-pagination',
        paginationClickable :true,
        autoplay: 5000,
        loop:true,
    });

    function moveTo(obj) {
        $(obj).find("ul:first").animate({
            marginTop: "-1.25rem"
        }, 500, function (){
            $(this).css({ marginTop: "0px" }).find("li:first").appendTo(this);
        });
    };

    var sele = 0;
    $('.tabs').hide();
    $(".sele-ul").click(function () {
        if(sele==0 || $('.sele-ul .active')==undefined) {
            $('.tabs').show();
        }
    });
    $(".sele-ul").on('click','a',function () {
        if($(this).attr('class')==='tab-link button active'){
            $('.tabs').hide();
            sele = 1;
            $('.sele-ul .active').attr('class','tab-link button');
        }else {
            $('.tabs').show();
            $(this).attr('class','tab-link button active');
        }

    });
</script>
</body>
</html>