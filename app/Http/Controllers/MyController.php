<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {

        return view('classes.my');
    }

    public function news()
    {
        $appointments = auth()->user()->appointments->sortByDesc('updated_at');
        //把开始时间切回本地时区
        foreach ($appointments as &$appointment) {
            $appointment->start_time = PostsController::timeZoneTransfer(
                $appointment->start_time,
                $appointment->user_timezone)
                ->format('Y-m-d H:m');
        }
        return view('classes.news', compact('appointments'));
    }
}
