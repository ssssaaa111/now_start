@extends('layouts1.login')

@section('content')
    <h4>Register牛蛙</h4>
    <form class="ten">
        <li class="cream">
            <input type="text" autofocus class="text" value="Username" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Username';}" ><a href="#" class=" icon10 user10"></a>
        </li>
        <li class="cream">
            <input type="text" class="text" value="Email" onFocus="this.value = '';" onBlur="if (this.value == '') {this.value = 'Email';}" ><a href="#" class=" icon10 email10"></a>
        </li>
        <li class="cream">
            <input type="password" placeholder="Password"><a href="#" class=" icon10 lock10"></a>
        </li>
        <li class="cream">
            <input type="password" placeholder="Retype password"><a href="#" class=" icon10 lock10"></a>
        </li>
        <li class="cream">
            <input type="checkbox" checked placeholder="Retype password"><span> I agree to the terms</span>
            <div class="submit-ten">
                <input type="submit" onClick="myFunction()" value="Register" >
            </div>
        </li>

        <p>Or<p>
        <div class="fb"><a href="#"><span> </span> <lable>Sign in with QQ</lable><div class="clear"></div></a></div>
        <div class="fb fb-wx"><a href="#"><span> </span> <lable>Sign in with WeChat</lable><div class="clear"></div></a></div>

    </form>
    <a class="log-tail">I have an account.</a>
    @endsection