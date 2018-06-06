<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Laravel Messenger</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"  integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <style>
        body {
            padding-top: 70px;
        }
    </style>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                    aria-expanded="false" aria-controls="navbar">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#">Messenger</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/">Home</a></li>
                <li><a href="/messages">Messages @include('messenger.unread-count')</a></li>
                <li><a href="/messages/create">Create New Message</a></li>
            </ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>

<div class="container">
    @yield('content')
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>