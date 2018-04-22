<?php

namespace App\Http\Controllers;

use App\Post;
use App\Uploadingfile;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Response;
use DateTimeZone;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $user = auth()->id();
        $tz = $this->getUserTimeZone();
        $inProgressIds = Redis::zrevrange("user.{$user}.inProgress", 0, 2);
        $inProgress = collect($inProgressIds)->map(function ($id) {
            return Post::find($id);
        });

        $posts = Post::latest()
            ->filter(request(['month', 'year']))
            ->get();
        foreach ($posts as &$post) {
            if (!empty($post->ext)) {
                $post->ext = json_decode($post->ext, true);
            }
        }
        $tzlist = DateTimeZone::listIdentifiers(DateTimeZone::ALL);
        return view('classes.release', compact('posts', 'inProgress', 'tzlist', 'tz'));
    }

    public function show(Post $post)
    {

//        if (auth()->user()->can('update-post', $post)) {
//            return 111111;
//        }
//        $this->authorize('update-post', $post);
//        if (Gate::denies('show-post', $post)) {
//            abort('403', 'Sorry, not sorry');
//        }

        $user = $post->user->id;
        Redis::zadd("user.{$user}.inProgress", time(), $post->id);
        $files = $post->files;
        return view('classes.show', compact('post', 'files'));
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
        session()->flash('message', 'your post has been published');
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
            'url' => asset('download/' . $post->id) . '?filename=' . $file_name
        ]));
        return back();
    }

    /**
     * @return DateTimeZone|string
     */
    public function getUserTimeZone()
    {
        $ip = $_SERVER['REMOTE_ADDR']; // means we got user's IP address
        $json = file_get_contents('http://ip-api.com/json/' . $ip); // this one service we gonna use to obtain timezone by IP
// maybe it's good to add some checks (if/else you've got an answer and if json could be decoded, etc.)
        $ipData = json_decode($json, true);
        if ($ipData['timezone']) {
            $tz = new DateTimeZone($ipData['timezone']);
            $now = new \DateTime( 'now', $tz); // DateTime object corellated to user's timezone
            $tz = $ipData['timezone'];
        } else {
            $now = new \DateTime();
            $tz = "UTC";
        }
        return $tz;
    }
}
