<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\CourseOutline;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseOutlineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //fetching only approved course outlines
        $courseOutlines = CourseOutline::where('status', 1)->latest()->get();
        $courses = Course::all();
        
        return view('course-outline.index', compact('courseOutlines', 'courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // fetching all courses
        $courses = Course::latest()->get();

        return view('course-outline.create', compact('courses'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // posting the course outline to the db
        // validation
        $this->validate($request, [
            'course_id'=>'required',
            'description'=>'required',
        ]);

        $courseOutline = new CourseOutline();
        $courseOutline->course_id =$request->course_id;
        $courseOutline->description = $request->description;
        // Getting the logged in user id. 
        // Auth::user()->id  can also be used to get the user id
        $courseOutline->created_by = Auth::id(); 
        $courseOutline->status = 1; 
        $courseOutline->save();

        return redirect()->route('course-outline.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $courseOutline = CourseOutline::findOrFail($id);
        $coursess = Course::all();
        return view('course-outline.edit', compact('courseOutline', 'coursess'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Deleting the specified resource
        $courseOutline = CourseOutline::findOrFail($id);
        $courseOutline->delete();

        return redirect()->route('course-outline.index');

    }
}
