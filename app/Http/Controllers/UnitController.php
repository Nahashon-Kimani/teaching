<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    /*
     * Function index to return unit index page
     * Will also be used to fetch all units from db 
     */  

     public function index()
     {
        // Fetching all units from db in an ascending order 
        $units = Unit::latest()->get();
        
        // returning and compacting units to the view
        return view('unit.index', compact('units'));
     }

    //  Function to show the create unit form
    public function create()
    {
        // fetch all courses to display them as drop down-menu while creating a unit
        $courses = Course::all();

        // returning the view create
        return view('unit.create', compact('courses'));
    }

    // Function to store a unit
    public function store(Request $request)
    {
        // Validating data
        $this->validate($request, [
            'name'=>'required|unique:units',
            'course_id'=>'required',
            'unit_duration'=>'required',
        ]);

        // Creating a new instance of a unit
        $unit = new Unit();
        $unit->name = $request->name;
        $unit->slug = Str::slug($request->name);
        $unit->course_id = $request->course_id;
        $unit->unit_duration = $request->duration;
        $unit->unit_outline = $request->unit_outline;
        $unit->save();

        return redirect()->route('course');
    }

    // Function to show the edit form 
    public function edit($id)
    {
        // finding the unit to edit
        $unit = Unit::find($id);

        // Fetching courses.
        $courses = Course::all();

        // returning the edit form page
        return view('unit.edit', compact('unit', 'courses'));
    }
    
    // Function to update a unit
    public function update(Request $request, $id)
    {
        // Validating input
        $this->validate($request, [
            'name'=>'required|unique:units',
            'course_id'=>'required',
            'unit_duration'=>'required',
        ]);

        // Finding unit to update
        $unit = Unit::find($id);

        // Updating unit details
        $unit->name = $request->name;
        $unit->slug = Str::slug($request->name);
        $unit->course_id = $request->course_id;
        $unit->unit_duration = $request->duration;
        $unit->unit_outline = $request->unit_outline;
        $unit->save();

        return redirect()->route('unit');        
    }


    // Function destroy to delete a unit
    public function destroy($id)
    {
        // finding the unit to delete
        $unit = Unit::findOrFail($id);

        // Deleting the unit
        $unit->delete();

        // returning back to index page
        return redirect()->route('unit');
    }

}
