<?php

namespace App\Http\Controllers;

use App\Courses;
use App\Category;
use Illuminate\Http\Request;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::orderBy('id', 'desc')->get();
        return view('backend.courses.index', compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();

        return view('backend.courses.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         // Validation
        $request->validate([
            "name" => "required",
            "price" => "required",
            "access" => "required",
            "duration" => "required"
        ]);

        // store data in db
        $course = new Courses;
        $course->name = $request->name;
        $course->price = $request->price;
        $course->discount = $request->discount;
        $course->description = $request->description;
        $course->note = $request->note;
        $course->access = $request->access;
        $course->duration = $request->duration;
        $course->certificate = $request->certificate;     
        $course->category_id = $request->category_id;

        $course->save();

        return redirect()->route('courses.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $course)
    {
        return view('backend.courses.show', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $course)
    {
        $categories = Category::all();

        return view('backend.courses.edit', compact('course','categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Courses $course)
    {
        $course->name = $request->name;
        $course->price = $request->price;
        $course->discount = $request->discount;
        $course->description = $request->description;
        $course->access = $request->access;
        $course->duration = $request->duration;
        $course->certificate = $request->certificate;
        $course->note = $request->note;
        $course->category_id = $request->category_id;

        $course->save();

        return redirect()->route('courses.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(Courses $course)
    {
        $course->delete();

        return redirect()->route('courses.index');
    }
}
