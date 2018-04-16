@extends('layouts.master')

@section('content')


    <div class="col-sm-8 blog-main">

        <h1>Recent Readings</h1>
        <hr>
        {{--@foreach($inProgress as $post)--}}
            {{--@include('posts.post')--}}
        {{--@endforeach--}}

        <h1>All Posts</h1>
        <hr>
        @foreach($posts as $post)
            @include('posts.post')
        @endforeach

        <nav class="blog-pagination">
            <a class="btn btn-outline-primary" href="#">Older</a>
            <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
        </nav>

    </div><!-- /.blog-main -->



@endsection