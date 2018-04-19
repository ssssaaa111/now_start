@extends('layouts.login')

@section('content')
    <h4>LOGIN 牛蛙</h4>
    <form class="ten" method="POST" action="{{ route('login') }}">
        {{ csrf_field() }}
        <div class="fb"><a href="login/github"><span> </span>
                <lable>Sign in with Github</lable>
                <div class="clear"></div>
            </a></div>
        <div class="fb fb-wx"><a href='login/weixin'><span> </span>
                <lable>Sign in with WeChat</lable>
                <div class="clear"></div>
            </a></div>
        <p>Or
        <p>
        <li class="cream">
            <input type="text" autofocus class="text" placeholder="Email" name="email">
        </li>
        <li class="cream">
            <input type="password" name="password" placeholder="Password">
        </li>
        <div class="submit-ten">
            <input type="submit" onClick="myFunction()" value="Log in">
        </div>
    </form>
    <p class="tail-paw">Forget the password?<a href="forgetpassword" class="log-tail">Retrieve the password</a></p>
    <p class="tail-paw">Is there no account number?<a href="register" class="log-tail">Go to registration</a></p>
@endsection