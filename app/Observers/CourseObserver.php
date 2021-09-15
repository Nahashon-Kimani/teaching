<?php

namespace App\Observers;

use App\Models\Course;
use App\Notifications\CourseUpatedCreated;
use App\Notifications\NewCourseCreated;

class CourseObserver
{
    /**
     * Handle the Course "created" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function created(Course $course)
    {
       /**
        * We need to send an email whenever a new course is created.
        * To easily do this we need to register a notification NewCourseCreated
        * at this point
        * Remember to import class NewCourseCreated using the command
        * use App\Notifications\NewCourseCreated;
        */

        $course->notify(new NewCourseCreated());
    }

    /**
     * Handle the Course "updated" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function updated(Course $course)
    {
        /**
         * This will observe and send notification 
         * whenever the update function of course is triggered
         * Remember to import class CourseUpatedCreated from 
         * use App\Notifications\CourseUpatedCreated; 
         *  */ 

         $course->notify(new CourseUpatedCreated());
    }

    /**
     * Handle the Course "deleted" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function deleted(Course $course)
    {
        //
    }

    /**
     * Handle the Course "restored" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function restored(Course $course)
    {
        //
    }

    /**
     * Handle the Course "force deleted" event.
     *
     * @param  \App\Models\Course  $course
     * @return void
     */
    public function forceDeleted(Course $course)
    {
        //
    }
}
