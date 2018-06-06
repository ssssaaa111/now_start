<?php

namespace App\Http\Controllers;

use App\Post;
use App\Uploadingfile;
use App\Appointment;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Redis;
use Illuminate\Http\Response;
use DateTimeZone;
use Carbon\Carbon;


class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show','welcome']);
    }

    public function index()
    {
        $user = auth()->id();
        $tz = static::getUserTimeZone();
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

        return view('classes.release', compact('posts', 'inProgress', 'tzlist', 'tz', 'weekMap'));
    }

    public function welcome()
    {
        $posts = Post::inRandomOrder()
            ->limit(3)
            ->get();
        foreach ($posts as &$post) {
            if (!empty($post->ext)) {
                $post->ext = json_decode($post->ext, true);
            }
        }

        return view('classes.index', compact('posts'));
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
       $content = \Cache::get('teaching_mat'.$post->user_id);
        $weekMap = [
            0 => '星期天',
            1 => '星期一',
            2 => '星期二',
            3 => '星期三',
            4 => '星期四',
            5 => '星期五',
            6 => '星期六',
        ];
        $time_zone = static::getUserTimeZone();
        $test = $this->getAppointmentsTable($post);
        $present_data = array();
        foreach ($test as $a){
            $user_id = $a['user_id'];
            $id = $a['id'];
            $a = $a['start_time'];
            $a = static::timeZoneTransfer($a, $time_zone);
            $weekday = $a->dayOfWeek;
            $present_data[$weekday][] = array(
                'start_time'=>$a,
                'user_id'=>$user_id,
                'id'=>$id
            );
        }
        $day = $this->getDays($time_zone);
        $weekDay = $this->getWeekDays($time_zone);
        $today = $this->getToday($time_zone);
        $user = $post->user->id;
        Redis::zadd("user.{$user}.inProgress", time(), $post->id);
        $files = $post->files;
        return view('classes.show', compact('post', 'files', 'present_data', 'weekMap', 'day','weekDay', 'time_zone','today','content'));
    }

    public function edit(Request $request)
    {
        $content = $request['content'];
        $id = auth()->id();
        \Cache::forget('teaching_mat'.$id);
        \Cache::forever('teaching_mat'.$id, $content);
        return view('teacher.output',compact('content'));

    }


    public function create()
    {
        return view('posts.create');

    }

    public function store(Request $request)
    {

        $this->validate(request(), [
            'body' => 'required',
        ]);
        $teacher = Post::firstOrNew(['user_id'=>auth()->id()]);
        $teacher->fill(
            $request->all()
        )->save();
        flash('your post has been published')->success();

        /*auth()->user()->publish(
            new Post(request(['body']))
        );*/
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
    public static function getUserTimeZone()
    {
        $ip = $_SERVER['REMOTE_ADDR']; // means we got user's IP address
        $json = file_get_contents('http://ip-api.com/json/' . $ip); // this one service we gonna use to obtain timezone by IP
// maybe it's good to add some checks (if/else you've got an answer and if json could be decoded, etc.)
        $ipData = json_decode($json, true);
        if ($ipData['timezone']) {
            $tz = new DateTimeZone($ipData['timezone']);
            //$now = new \DateTime('now', $tz); // DateTime object corellated to user's timezone
            $tz = $ipData['timezone'];
        } else {
            //$now = new \DateTime();
            $tz = "UTC";
        }
        return $tz;
    }

    public function getAppointmentsTable(Post $post)
    {
        //当地时间
        $carbon = new \Carbon\Carbon();
        $start_time = $carbon->format('Y-m-d') . ' 00:00:00';
        $end_time = $carbon->addDays(7)->format('Y-m-d') . ' 00:00:00';

        $ap = Appointment::where('publisher_id', $post->user_id)
            ->where('start_time', '>=', $start_time)
            ->where('start_time', '<', $end_time)
            ->select('user_id', 'start_time', 'id')
            ->orderBy('start_time')
            ->get()
            ->toArray();
        return $ap;
    }

    public static function timeZoneTransfer($time='', $time_zone)
    {
        $carbon = new Carbon($time);
        $carbon->setTimezone($time_zone);
        return $carbon;
    }

    /**
     * @param $time_zone
     * @return array
     */
    public function getDays($time_zone): array
    {
        $carbon = new Carbon();
        $carbon->setTimezone($time_zone);
        $day = [];
        foreach (range(0, 7) as $item) {
            $day[] = $carbon->format('m-d');
            $carbon->addDay();
        }
        return $day;
    }

    public function getWeekDays($time_zone): array
    {
        $carbon = new Carbon();
        $carbon->setTimezone($time_zone);
        $day = [];
        foreach (range(0, 6) as $item) {
            $day[] = $carbon->dayOfWeek;
            $carbon->addDay();
        }
        return $day;
    }

    public function getToday($time_zone)
    {
        $carbon = new Carbon();
        $carbon->setTimezone($time_zone);
        return $carbon->format('Y-m-d');
    }
}
