<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function teacher(Request $request)
    {
        $country = Post::country();
        return view('classes.search_teacher', compact('country'));
    }
}
