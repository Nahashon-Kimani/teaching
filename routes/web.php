<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\CourseOutlineController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\UnitController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Creating a route group
Route::group(['middleware'=>['web','auth']],function(){
    Route::get('course', [CourseController::class, 'index'])->name('course');
    /**
     * Describing the route on line 31
     * get:-method to be used by this route(HTTP Verb)
     * course:- name of the route
     * CourseController: the controller to handle the HTTP request
     * index: function to handle the request
     * 
     */
   
    // Route to create course
    Route::get('create-course', [CourseController::class, 'create'])->name('create-course');

    // Route to post the course to the database
    Route::post('store-course', [CourseController::class, 'store'])->name('store-course');

    // Route to show the course edit form
    Route::get('edit-course/{id}', [CourseController::class, 'edit'])->name('edit-course');

    // Route to update a course
    Route::put('update-course/{id}', [CourseController::class, 'update'])->name('update-course');

    // Route to delete a course
    Route::delete('delete-course/{id}', [CourseController::class, 'delete'])->name('delete-course');

    // Route to show course details
    Route::get('show-course-details/{id}', [CourseController::class, 'show'])->name('show-course-details');


    

    // Units Routes starts 
    // Route to display unit index page 
    Route::get('unit', [UnitController::class, 'index'])->name('unit');

    // Route to display the create unit form
    Route::get('create-unit', [UnitController::class, 'create'])->name('create-unit');

    // Route to store a unit
    Route::post('store-unit', [UnitController::class, 'store'])->name('store-unit');

    // Route to show unit edit page 
    Route::get('edit-unit/{id}', [UnitController::class, 'edit'])->name('edit-unit');

    // Route to update a unit 
    Route::put('update-unit/{id}', [UnitController::class, 'update'])->name('update-unit');

    // Route to delete a unit
    Route::delete('delete-unit/{id}', [UnitController::class, 'destroy'])->name('delete-unit');

    /*  Lesson Route Resource
     *  lesson: name of the route prefix. 
     *  Every route will prefixed with the prefix lesson followed by a dot action 
     *  example: lesson.index to show index page, lesson.destroy for deletion
    */ 

    Route::resource('lesson', LessonController::class);


    // Resource Route for CourseOutline
    Route::resource('course-outline', CourseOutlineController::class);

    
});
