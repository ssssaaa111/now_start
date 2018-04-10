@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">

        <h1>{{$post->title}}</h1>
        {{--@if(count($post->tags))--}}
            {{--<ul>--}}
                {{--@foreach($post->tags as $tag)--}}
                    {{--<li>--}}
                        {{--<a href="/posts/tags/{{$tag->name}}">--}}
                            {{--{{$tag->name}}--}}
                        {{--</a>--}}
                    {{--</li>--}}
                {{--@endforeach--}}
            {{--</ul>--}}
        {{--@endif--}}
        {{$post->body}}
        <hr>

        @can('update', $post)
            <a href="#">update the post</a>
        @endcan

        <hr>
        <div class="comments">
            <ul class="list-group">
                @foreach($post->comments as $comment)
                    <li class="list-group-item">
                        <strong>
                            {{$comment->created_at->diffForHumans()}}: &nbsp;
                        </strong>
                        {{$comment->body}}
                    </li>
                @endforeach
            </ul>
        </div>

        <hr>
        <form action="/posts/upload/{{$post->id}}" method="POST" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="avatar">File input</label>
                <input type="file" id="avatar" name="avatar">
            </div>
            <button type="submit" class="btn btn-primary">确认上传</button>
        </form>

        <hr>
        @foreach($files as $file)
        <a href="{{$file->url}}">
            <button type="submit" class="btn btn-danger">{{$file->filename}}</button>
        </a>
        <hr>
        @endforeach
        {{--Add  a comment--}}
        {{--@can('edit the forum')--}}
            <div class="card">
                <div class="card-block">
                    <form method="POST" action="/posts/{{$post->id}}/comments">
                        {{csrf_field()}}
                        <div class="form-group">
                        <textarea name="body" class="form-control" placeholder="You comments here!" required>
                        </textarea>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">提交评论</button>
                        </div>
                    </form>
                    @include('layouts.errors')
                </div>
            </div>
        {{--@endcan--}}

        @can('manage money')
            <h4>View the reports</h4>
        @endcan

    </div>
@endsection