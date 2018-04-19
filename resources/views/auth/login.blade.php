@extends('adminlte.layout.allcssjs')
@section('content')
    <div class="login-box">
        <div class="login-logo">
            <a href="/posts"><b>牛蛙西语教育</b>LTE</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="POST" action="{{ route('login') }}">
                {{ csrf_field() }}
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" name="email" placeholder="Email">
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-8">
                        <div class="checkbox icheck">
                            <label>
                                <input type="checkbox" {{ old('remember') ? 'checked' : '' }}> Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="login/github" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i> Sign
                    in using
                    Github</a>
                <a href="login/weixin" class="btn btn-block btn-social btn-wechat btn-flat"><i class="fa fa-wechat"></i> Sign
                    in using
                    WeChat</a>
            </div>
            <!-- /.social-auth-links -->

            <a href="{{ route('password.request') }}">I forgot my password</a><br>
            <a href="register" class="text-center">Register a new membership</a>

        </div>
        <!-- /.login-box-body -->
    </div>
@endsection