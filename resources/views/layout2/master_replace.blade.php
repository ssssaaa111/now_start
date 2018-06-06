<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--  This file has been downloaded from bootdey.com    @bootdey on twitter -->
    <!--  All snippets are MIT license http://bootdey.com/license -->
    <!--
    	The codes are free, but we require linking to our web site.
    	Why to Link?
    	A true story: one girl didn't set a link and had no decent date for two years, and another guy set a link and got a top ranking in Google!
    	Where to Put the Link?
    	home, about, credits... or in a good page that you want
    	THANK YOU MY FRIEND!
    -->
    <title>Chat room with right list - Bootdey.com</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <style type="text/css">
        body{margin-top:20px;}

        /* WRAPPERS */
        #wrapper {
            width: 100%;
            overflow-x: hidden;
        }
        .wrapper {
            padding: 0 20px;
        }
        .wrapper-content {
            padding: 20px 10px 40px;
        }
        #page-wrapper {
            padding: 0 15px;
            min-height: 568px;
            position: relative !important;
        }
        @media (min-width: 768px) {
            #page-wrapper {
                position: inherit;
                margin: 0 0 0 240px;
                min-height: 2002px;
            }
        }


        .message-input {
            height: 90px !important;
        }
        .chat-avatar {
            white: 36px;
            height: 36px;
            float: left;
            margin-right: 10px;
        }
        .chat-user-name {
            padding: 10px;
        }
        .chat-user {
            padding: 8px 10px;
            border-bottom: 1px solid #e7eaec;
        }
        .chat-user a {
            color: inherit;
        }
        .chat-view {
            z-index: 20012;
        }
        .chat-users,
        .chat-statistic {
            margin-left: -30px;
        }
        @media (max-width: 992px) {
            .chat-users,
            .chat-statistic {
                margin-left: 0;
            }
        }
        .chat-view .ibox-content {
            padding: 0;
        }
        .chat-message {
            padding: 10px 20px;
        }
        .message-avatar {
            height: 48px;
            width: 48px;
            border: 1px solid #e7eaec;
            border-radius: 4px;
            margin-top: 1px;
        }
        .chat-discussion .chat-message.left .message-avatar {
            float: left;
            margin-right: 10px;
        }
        .chat-discussion .chat-message.right .message-avatar {
            float: right;
            margin-left: 10px;
        }
        .message {
            background-color: #fff;
            border: 1px solid #e7eaec;
            text-align: left;
            display: block;
            padding: 10px 20px;
            position: relative;
            border-radius: 4px;
        }
        .chat-discussion .chat-message.left .message-date {
            float: right;
        }
        .chat-discussion .chat-message.right .message-date {
            float: left;
        }
        .chat-discussion .chat-message.left .message {
            text-align: left;
            margin-left: 55px;
        }
        .chat-discussion .chat-message.right .message {
            text-align: right;
            margin-right: 55px;
        }
        .message-date {
            font-size: 10px;
            color: #888888;
        }
        .message-content {
            display: block;
        }
        .chat-discussion {
            background: #eee;
            padding: 15px;
            height: 400px;
            overflow-y: auto;
        }
        .chat-users {
            overflow-y: auto;
            height: 400px;
        }
        .chat-message-form .form-group {
            margin-bottom: 0;
        }
        .ibox {
            clear: both;
            margin-bottom: 25px;
            margin-top: 0;
            padding: 0;
        }
        .ibox.collapsed .ibox-content {
            display: none;
        }
        .ibox.collapsed .fa.fa-chevron-up:before {
            content: "\f078";
        }
        .ibox.collapsed .fa.fa-chevron-down:before {
            content: "\f077";
        }
        .ibox:after,
        .ibox:before {
            display: table;
        }
        .ibox-title {
            -moz-border-bottom-colors: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background-color: #ffffff;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 3px 0 0;
            color: inherit;
            margin-bottom: 0;
            padding: 14px 15px 7px;
            min-height: 48px;
        }
        .ibox-content {
            background-color: #ffffff;
            color: inherit;
            padding: 15px 20px 20px 20px;
            border-color: #e7eaec;
            border-image: none;
            border-style: solid solid none;
            border-width: 1px 0;
        }
        .ibox-footer {
            color: inherit;
            border-top: 1px solid #e7eaec;
            font-size: 90%;
            background: #ffffff;
            padding: 10px 15px;
        }

        .message-input {
            height: 90px !important;
        }
        .form-control, .single-line {
            background-color: #FFFFFF;
            background-image: none;
            border: 1px solid #e5e6e7;
            border-radius: 1px;
            color: inherit;
            display: block;
            padding: 6px 12px;
            transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s;
            width: 100%;
            font-size: 14px;
        }
    </style>
</head>
<body>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-content">
                        <strong>Chat room </strong>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox chat-view">
                    <div class="ibox-title">
                        <small class="pull-right text-muted">Last message:  Mon Jan 26 2015 - 18:39:23</small> Chat room panel
                    </div>
                    <div class="ibox-content">
                        <div class="row">
                            <div class="col-md-9 ">
                                <!--<div class="chat-discussion">-->

                                <!--<div class="chat-message left">-->
                                <!--<img class="message-avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">-->
                                <!--<div class="message">-->
                                <!--<a class="message-author" href="#"> Michael Smith </a>-->
                                <!--<span class="message-date"> Mon Jan 26 2015 - 18:39:23 </span>-->
                                <!--<span class="message-content">-->
                                <!--Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.-->
                                <!--</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--<div class="chat-message right">-->
                                <!--<img class="message-avatar" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">-->
                                <!--<div class="message">-->
                                <!--<a class="message-author" href="#"> Karl Jordan </a>-->
                                <!--<span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>-->
                                <!--<span class="message-content">-->
                                <!--Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover.-->
                                <!--</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--<div class="chat-message right">-->
                                <!--<img class="message-avatar" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">-->
                                <!--<div class="message">-->
                                <!--<a class="message-author" href="#"> Michael Smith </a>-->
                                <!--<span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>-->
                                <!--<span class="message-content">-->
                                <!--There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration.-->
                                <!--</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--<div class="chat-message left">-->
                                <!--<img class="message-avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">-->
                                <!--<div class="message">-->
                                <!--<a class="message-author" href="#"> Alice Jordan </a>-->
                                <!--<span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>-->
                                <!--<span class="message-content">-->
                                <!--All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.-->
                                <!--It uses a dictionary of over 200 Latin words.-->
                                <!--</span>-->
                                <!--</div>-->
                                <!--</div>-->
                                <!--<div class="chat-message right">-->
                                <!--<img class="message-avatar" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">-->
                                <!--<div class="message">-->
                                <!--<a class="message-author" href="#"> Mark Smith </a>-->
                                <!--<span class="message-date">  Fri Jan 25 2015 - 11:12:36 </span>-->
                                <!--<span class="message-content">-->
                                <!--All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet.-->
                                <!--It uses a dictionary of over 200 Latin words.-->
                                <!--</span>-->
                                <!--</div>-->
                                <!--</div>-->

                                <!--</div>-->

                            </div>
                            <div class="col-md-3">
                                <div class="chat-users">


                                    <div class="users-list">
                                        <div class="chat-user">
                                            <img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                            <div class="chat-user-name">
                                                <a href="#">Karl Jordan</a>
                                            </div>
                                        </div>
                                        <div class="chat-user">
                                            <img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar2.png" alt="">
                                            <div class="chat-user-name">
                                                <a href="#">Monica Smith</a>
                                            </div>
                                        </div>
                                        <div class="chat-user">
                                            <span class="pull-right label label-primary">Online</span>
                                            <img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar3.png" alt="">
                                            <div class="chat-user-name">
                                                <a href="#">Michael Smith</a>
                                            </div>
                                        </div>
                                        <div class="chat-user">
                                            <span class="pull-right label label-primary">Online</span>
                                            <img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar4.png" alt="">
                                            <div class="chat-user-name">
                                                <a href="#">Janet Smith</a>
                                            </div>
                                        </div>
                                        <div class="chat-user">
                                            <img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar5.png" alt="">
                                            <div class="chat-user-name">
                                                <a href="#">Alice Smith</a>
                                            </div>
                                        </div>
                                        <div class="chat-user">
                                            <img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar6.png" alt="">
                                            <div class="chat-user-name">
                                                <a href="#">Monica Cale</a>
                                            </div>
                                        </div>
                                        <div class="chat-user">
                                            <img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="">
                                            <div class="chat-user-name">
                                                <a href="#">Mark Jordan</a>
                                            </div>
                                        </div>
                                        <div class="chat-user">
                                            <span class="pull-right label label-primary">Online</span>
                                            <img class="chat-avatar" src="https://bootdey.com/img/Content/avatar/avatar8.png" alt="">
                                            <div class="chat-user-name">
                                                <a href="#">Janet Smith</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="chat-message-form">
                                    <div class="form-group">
                                        <textarea class="form-control message-input" name="message" placeholder="Enter message text and press enter"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="http://netdna.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">

</script>
</body>
</html>