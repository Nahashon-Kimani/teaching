<?php

namespace App\Providers;

use App\Models\Course;
use App\Notifications\CourseUpatedCreated;
use App\Notifications\NewCourseCreated;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
    ];

    /**
     * Register any events for your application.
     * To register an observer, you need to call 
     * the observe method on the model you wish 
     * to observe
     * 
     * @return void
     */
    public function boot()
    {
        /**
         * To re
         * Which model are we observing? Course
         * Which class is observing Course Model? NewCourseCreated
         * Therefore to register this Observer we will write
         * Model::observe(ObserverClass)
         */

         Course::observe(NewCourseCreated::class);
         Course::observe(CourseUpatedCreated::class);

    }
}
