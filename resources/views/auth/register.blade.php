@extends("adminlte.layout.allcssjs")

@section("content")
    <div class="register-box">
        <div class="register-logo">
            <a href="/posts"><b>牛蛙西语教育</b>LTE</a>
        </div>

        <div class="register-box-body">
            <p class="login-box-msg">Register a new membership</p>

            <form method="POST" action="{{ route('register') }}">
                {{ csrf_field() }}


                <div class="form-group  {{ $errors->has('name') ? ' has-error' : '' }} has-feedback">
                    <input type="text" class="form-control" name="name" placeholder="Full name"
                           value="{{ old('name') }}" required>
                    @if ($errors->has('name'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-user form-control-feedback"></span>
                </div>

                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
                    <input type="email" class="form-control" placeholder="Email" value="{{ old('email') }}" name="email"
                           required>
                    @if ($errors->has('email'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }} has-feedback">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                    @if ($errors->has('password'))
                        <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                    @endif
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" name="password_confirmation" class="form-control"
                           placeholder="Retype password" required>
                    <span class="glyphicon glyphicon-log-in form-control-feedback"></span>
                </div>
                <div class="row">
                    <!--  <div class="col-xs-8">
                       <div class="checkbox icheck">
                         <label>
                           <input type="checkbox"> I agree to the <a href="#">terms</a>
                         </label>
                       </div>
                     </div> -->
                    <!-- /.col -->
                    <div class="col-xs-4">
                        <button type="submit" class="btn btn-primary btn-block btn-flat">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="login/github" class="btn btn-block btn-social btn-github btn-flat"><i class="fa fa-github"></i>
                    Sign up using
                    Github</a>
                @if (strpos($_SERVER['HTTP_USER_AGENT'], 'MicroMessenger') == true)
                    <a href="login/weixin" class="btn btn-block btn-social btn-wechat btn-flat"><i
                                class="fa fa-wechat"></i> Sign up using
                        Wechat</a>
                @endif
            </div>

            <a href="login" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div>
@endsection
