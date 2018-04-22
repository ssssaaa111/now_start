<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport"
          content="width=device-width,initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">

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
    <link rel="stylesheet" href="/css/common.css">
    {{--<script src="https://code.jquery.com/jquery-latest.js"></script>--}}
    @yield('head')

    <link rel="stylesheet" href="https://at.alicdn.com/t/font_618936_fheok2d376d5nrk9.css">

</head>
<body>
<div class="page-group ">
    @yield('content')
</div>

@include('common.footer_js')

@yield('foot')
</body>
</html>