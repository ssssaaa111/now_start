@extends('layout2.master')

@section('content')
    <div class="ibox-content">
        <div class="row">
            <div class="col-md-9 ">
                <div class="chat-discussion">
        <h1>{{ $thread->subject }}</h1>
        @each('messenger.partials.messages', $thread->messages, 'message')

        @include('messenger.partials.form-message')
    </div>
            </div>
        </div>
    </div>
@stop
