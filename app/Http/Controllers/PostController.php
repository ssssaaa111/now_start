<?php

namespace App\Http\Controllers;

use App\Post;
use App\Uploadingfile;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Response;


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
        $inProgress = collect($inProgressIds)->map(function ($id) {
            return Post::find($id);
        });

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
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
        $files = $post->files;
        return view('posts.show', compact('post', 'files'));
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
        session()->flash('message','your post has been published');
        auth()->user()->publish(
            new Post(request(['title', 'body']))
        );
        return redirect('posts');
    }

    public function test()
    {
//        return view('test');
        return view('adminlte.calendar');
    }

    public function getDownload(Post $post)
    {
        //PDF file is stored under project/public/download/info.pdf
        $file = public_path() . "/storage/" . $post->id . '/' . \request('filename');
        //$file= public_path(). "/storage/".auth()->id()."/607_a.log";

        $headers = array(
            'Content-Type: application/log',
        );
        return response()->download($file, \request('filename'), $headers);
    }

    public function upload(Post $post)
    {
        $file_name = request()->file('avatar')->getClientOriginalName();
        // $file_path = public_path() . "/storage/" . $post->id . '/' . $file_name;
        request()->file('avatar')->storeAs("public/" . $post->id, $file_name);
//        $this->update([
//            'url' => asset($file_path),
//            'filename' => $filename
//        ]);
        auth()->user()->uploading(new Uploadingfile([
            'post_id' => $post->id,
            'filename' => $file_name,
            'url' => asset('download/' . $post->id).'?filename=' . $file_name
        ]));
        return back();
    }
}
