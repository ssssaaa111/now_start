{{--<div class="media">
    <a class="pull-left" href="#">
        <img src="{{ $message->user->avatar }}"
             alt="{{ $message->user->name }}" class="img-circle">
    </a>
    <div class="media-body">
        <h5 class="media-heading">{{ $message->user->name }}</h5>
        <p>{{ $message->body }}</p>
        <div class="text-muted">
            <small>Posted {{ $message->created_at->diffForHumans() }}</small>
        </div>
    </div>
</div>--}}
<div
        @if($message->user->id != auth()->id())
        class="chat-message left"
        @else
        class="chat-message right"
        @endif>
    <img class="message-avatar" src="{{$message->user->avatar}}" alt="">
    <div class="message">
        <a class="message-author" href="#"> {{$message->user->name}} </a>
        <span class="message-date">  {{ $message->created_at->diffForHumans() }} </span>
        <span class="message-content">
											{{ $message->body }}
                                            </span>
    </div>
</div>

