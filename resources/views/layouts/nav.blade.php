<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/posts">西语教育平台</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            <a class="nav-link" href="#">New hires</a>
            @if(Auth::check())
                <div class="btn-group ml-auto">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        {{Auth::user()->name}}
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/admin/article">我的课程</a>
                        <a class="dropdown-item" href="/posts/create">发布课程</a>
                        <a class="dropdown-item" href="/logout">退出</a>
                        {{--<a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>--}}
                    </div>
                </div>
            @else
                <div class="btn-group ml-auto">
                    <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                        未登录
                    </button>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="/login">注册</a>
                        <a class="dropdown-item" href="/register">登录</a>
                        {{--<a class="dropdown-item" href="#">Something else here</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Separated link</a>--}}
                    </div>
                </div>

            @endif
        </nav>
    </div>
</div>



