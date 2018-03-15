<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $user = auth()->id();
        $inProgressIds = Redis::zrevrange("user.{$user}.inProgress", 0, 2);
        $inProgress = collect($inProgressIds)->map(function($id){
            return Post::find($id);
        });

        $posts = Post::latest()
            //->filter(request(['month', 'year']))
            ->get();
        //$archives = Post::archive();
        return view('posts.index', compact('posts', 'inProgress'));
    }

    public function show(Post $post)
    {

        /*       if(auth()->user()->can('update-post', $post)){
                   return 111111;
               }
               $this->authorize('update-post', $post);
               if(Gate::denies('show-post', $post)){
                   abort('403', 'Sorry, not sorry');
               }
               $user = auth()->user()->id;
               Redis::zadd("user.{$user}.inProgress", time(), $post->id);*/
        return view('posts.show', compact('post'));
    }

    public function create()
    {
        return view('posts.create');

    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',
        ]);

        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
        return redirect('posts');
    }
}
