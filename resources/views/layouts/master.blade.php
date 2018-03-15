@extends('layouts.app')

@section('content')

@include('layouts.nav')

@if($flash = session('message'))
    <div id="flash-message" class="alert alert-success" role="alert">
        {{$flash}}
    </div>
@endif

<div class="blog-header">
    <div class="container">
        <h1 class="blog-title">The Bootstrap Blog</h1>
        <p class="lead blog-description">An example blog template built with Bootstrap.</p>
    </div>
</div>

<div class="container">
    <div class="row">
        @yield('content')

{{--        @include('layouts.sidebar')--}}
    </div>
</div>


@include('layouts.footer')
@endsection