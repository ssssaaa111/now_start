<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Post;

class ArticleController extends Controller
{
    public function index()
    {
        return view('admin/article/index')->withArticles(Post::all());
    }
}
