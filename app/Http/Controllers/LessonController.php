<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use App\Models\Unit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // fetching all lessons 
        // Use paginate method instead of get to paginate to 10 per result set
        $lessons = Lesson::latest()->get();
 
        /**
         * Getting lessons of unit id 1
         * Where as in this example has 3 parameters
         * unit_id: column name
         * = logical operator, others include >, <, like, <>, >=, <= e.t.c.
         * 1 value to compare with
         */
        //$lessons = Lesson::where('unit_id', 1)->latest()->get();

        /**
         * Using Or where Clause
         * A simpler method for the query:
         * $lessons_from_1_2_unit_id = Lesson::where('unit_id', 1)
         *                                   ->orWhere('unit_id', 2)
         *                                   ->latest()
         *                                   ->get(); 
         * Optimize the query to:
         *  */ 
                  
        $lessons_from_1_2_unit_id = Lesson::where('unit_id', '<', 3)->latest()->get();


        /**
         * Ordering lessons of unit id 1 in desc order 
         * and their names in asc order
         * 
         */
        $ordered_lessons_of_unit_id_1 = Lesson::where('unit_id', 1)
                                        ->orderBy('id', 'desc')
                                        ->orderBy('name', 'asc')
                                        ->get();

        


        /**
         * Using multiple where clauses: using multiple where clauses.
         * 
         */
        $firstFiveLessons = Lesson::where('unit_id', 1)
                                    ->where('id', '<=', 5)
                                    ->oldest()
                                    ->get();

        // selecting name, objectives, and created_by only from lessons table
        $updateLessons = Lesson::select('name', 'objectives', 'created_by')
                            ->orderBy('name', 'DESC')
                            ->get();

        // Returnung a view
        return view('lesson.index', compact('lessons'));
    }

    /**
     * Show the form for creating a new lesson.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Fetching all units from db
        $units = Unit::all();

        // Returning create page
        return view('lesson.create', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //creating a new lesson
        // validating input
        $this->validate($request, [
            'name'=>'required',
            'objectives'=>'required',
            'associated_unit'=>'required',
            'lesson_notes'=>'required',
        ]);

        // creating an instance of lesson
        $lesson = new Lesson();
        $lesson->name = $request->name;
        $lesson->slug = Str::slug($request->name);
        $lesson->objectives = $request->objectives;
        $lesson->unit_id = $request->associated_unit;
        $lesson->lesson_notes = $request->lesson_notes;
        // getting the authenticated user id
        // Remember to import class Auth as use Illuminate\Support\Facades\Auth;
        $lesson->created_by = Auth::id(); 
        
        $lesson->save();

        // Back to index page
        return redirect()->route('lesson.index');
        
    }

    /**
     * Display the specified lesson on a view.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Finding the specified lesson 
        $lesson = Lesson::findOrFail($id);

        // Returning a page and lesson details
        return view('lesson.show', compact('lesson'));
    }

    /**
     * Show the form for editing the specified lesson.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // Finding the specified lesson
        $lesson = Lesson::findOrFail($id);

        // Getting Unit List
        $units = Unit::all();

        // Returning edit view
        return view('lesson.edit', compact('units', 'lesson'));

    }

    /**
     * Update the specified lesson in lessons table.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // validating input
        $this->validate($request, [
            'name'=>'required',
            'objectives'=>'required',
            'associated_unit'=>'required',
            'lesson_notes'=>'required',
        ]);

        // Finding the specified lesson
        $lesson = Lesson::find($id);

        // Updating Lesson details
        $lesson->name = $request->name;
        $lesson->slug = Str::slug($request->name);
        $lesson->objectives = $request->objectives;
        $lesson->unit_id = $request->associated_unit;
        $lesson->lesson_notes = $request->lesson_notes;
                
        $lesson->save();

        // Back to index page
        return redirect()->route('lesson.index');
    }

    /**
     * Remove the specified lesson from the lessons table.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //finding the specified lesson
        $lesson = Lesson::find($id);

        // Deleting the lesson
        $lesson->delete();

        // Return back to index page
        return redirect()->route('lesson.index');
    }
}
