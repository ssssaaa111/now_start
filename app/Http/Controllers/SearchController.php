<?php

namespace App\Http\Controllers;

use App\Post;
use App\Teacher;
use Illuminate\Http\Request;

class SearchController extends Controller
{

    public $country;
    public $language;

    /**
     * SearchController constructor.
     */
    public function __construct()
    {
        $this->country = Teacher::country();
        $this->language = Teacher::language();
    }

    public function index(Request $request)
    {
        $type = ['language', 'country', 'hourly_rate', 'hot'];
        foreach ($type as $item){
            if (!empty($v = session($item) && !isset($request[$item]))){
                $request[$item] = $v;
            }
        }

        foreach ($type as $item){
            if (!empty($request[$item])){
                session()->flash($item, $request['item']);
            }
            else{
                unset($request[$item]);
            }
        }

        $country = $this->country;
        $language = $this->language;
        $posts = array();
        if(empty($request->all())){
            $posts = Post::inRandomOrder()
                ->limit(3)
                ->get();
        }
        else{
            $teachers = Teacher::latest()
                ->filter($request->all())
                ->get();
            if (!empty($teachers)){
                foreach ($teachers as  $teacher){
                    if (!empty($teacher->posts)){
                        $posts[] = $teacher->posts;
                    }
                }
            }
        }
        return view('classes.search_teacher', compact('country', 'language', 'posts'));
    }

    public function store(Request $request)
    {
        $country = $this->country;
        $language = $this->language;
        if (!empty($request['body'])) {
            $posts = Post::getByBody($request['body']);
            return view('classes.search_teacher', compact('country', 'language', 'posts'));
        }

        return false;

    }


}
