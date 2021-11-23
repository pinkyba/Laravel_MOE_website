<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Courses;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $latest_courses = Courses::orderBy('id','desc')->take(6)->get();

        return view('home',compact('latest_courses'));
    }
}
