<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use Illuminate\Support\Str;

class CourseController extends Controller
{
    // Fucntion to render indexpage
    public function index()
    {

        /**
         * Averaging Records
         * Uses function avg on a  query
         * Example: finding average of ID less than 10 in courses table
         */
        $avgs = Course::where('id', '<', 10)->avg('id'); // Don't forget to compact the output

        /**
         * Finding the sum
         * Uses the function sum on a given query
         * Example: Finding the sum of ID greater than 10
         *  */ 

         $summation = Course::where('id', '>', 10)->sum('id');



        // Counting the number of courses
        $noOfCourses = Course::count(); // Remember to pass it to the view inside compact method

        /**
         * Minimum ID from courses table
         * use the min function and pass the column as the only parameter
         * 
         * To select the max: 
         * use max function and pass the column as the only parameter
         *  Example using min
         */
        $minId = Course::min('id');


        /**
         * Fetching all the courses from the table course.
         * To select all courses in sql we write select*from courses;
         * To replicate the same using PDO, we use our ORM to fetch all the courses by 
         * Course::all()
         * After fetching we need to pass them to our view, index.blade.php using compact function
         *  */ 

        /**
         * Instead of showing all courses in the db in an ordered way, using the
         * this query: $courses = Course::all();
         * lets display them in a random order
         * 
         */
        
        $courses = Course::inRandomOrder()->get();
        return view('course.index', compact('courses', 'noOfCourses'));

        
    }


    // Fucntion to render create page with the form
    public function create()
    {
        return view('course.create');
    }

    /**
     * Function to request data from the form in the create page and post data to the db
     * 
     * This function has one parameter: Request to request dat from the db
    */ 

    public function store(Request $request)
    {
        // Validating the input
        $this->validate($request, [
            'name'=>'required',
            'duration'=>'required',
            'course_level'=>'required',
            'description'=>'required',
        ]);

        // Creating an instance of a course to post it to the db
        // Remember to import the class Course like use App\Models\Course on line 6
        $course = new Course();
        $course->name = $request->name;
        $course->slug = Str::slug('name', '-');
        $course->course_level = $request->course_level;
        $course->duration = $request->duration;
        $course->status = 1;
        $course->description = $request->description;
        $course->save();


        // Return back to index page
        return redirect()->route('course');

    }

    // Editing Function
    public function edit($id)
    {
        // Finding the course to update
        $course = Course::find($id);

        // returning a view, and the course details
        return view('course.edit', compact('course'));
    }

    // Function to update the course
    public function update(Request $request, $id)
    {       
         // Validating the input
         $this->validate($request, [
            'name'=>'required',
            'duration'=>'required',
            'course_level'=>'required',
            'description'=>'required',
        ]);

        // Finding the course to update
        $course = Course::find($id);

        // Updating different course columns
        $course->name = $request->name;
        $course->slug = Str::slug('name', '-');
        $course->course_level = $request->course_level;
        $course->duration = $request->duration;
        $course->status = 1;
        $course->description = $request->description;
        $course->save();


        // Return back to index page
        return redirect()->route('course');
    }


    // Function to show course details
    // This function requires one parameter to fetch the exact record from the db
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('course.show', compact('course'));
    }

    public function delete($id)
    {
        // Finding the course to delete
        $course = Course::find($id);

        // Deleting a course
        $course->delete();

        // Returning back to index page
        return redirect()->route('course');
    }

}
