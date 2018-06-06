<nav class="bar bar-tab">
    <a class="tab-item external active " href="/">
        <span class="iconfont icon-maozi icon"></span>
        <span class="tab-label">首页</span>
    </a>
    <a class="tab-item external " href="/posts">
        <span class="icon icon-paperplane iconfont"></span>
        <span class="tab-label">发布</span>
    </a>
    <a class="tab-item external" href="/news">
        <span class="icon icon-xiaoxi iconfont"></span>
        <span class="tab-label">消息</span>
        @if(auth()->check())
            <?php $count = Auth::user()->newThreadsCount(); ?>
            @if($count > 0)
                    <span class="badge">{{ $count }}</span>
            @endif
        @endif
    </a>
    <a class="tab-item external " href="/my">
        <span class="icon icon-wode iconfont"></span>
        <span class="tab-label">我的</span>
    </a>
</nav>