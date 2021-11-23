<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Courses;

class FrontendController extends Controller
{
    public function home($value='')
    {
        $latest_courses = Courses::orderBy('id','desc')->take(6)->get();

        return view('frontend.home',compact('latest_courses'));
    }

    public function course($value='')
    {
        $courses = Courses::orderBy('id','desc')->get();
        return view('frontend.course', compact('courses'));
    }

    public function courseDetail($id)
    {       
        $course = Courses::find($id);

        $related_courses = Courses::where('category_id', $course->category_id)->take(3)->get();

        return view('frontend.course_detail', compact('course', 'related_courses'));

    }

    // frontend/account.blade.php
    public function account($value='')
    {
        return view('frontend.account');
    }

    // frontend/account_info.blade.php
    public function accountInfo($value='')
    {
        return view('frontend.account_info');
    }

    // frontend/cart.blade.php
    public function cart($id)
    {
        $course = Courses::find($id);
        return view('frontend.cart',compact('course'));
    }

    // about page
    public function about($value='')
    {
        return view('frontend.about');
    }

    // contact page
    public function contact($value='')
    {
        return view('frontend.contact');
    }

    // book page
    public function book($value='')
    {
        return view('frontend.book');
    }
}
