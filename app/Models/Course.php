<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    /**
     * Reversing Belongs To using has many 
     * A course has many units
     */

     public function units()
     {
         return $this->hasMany(Unit::class);
     }

    //  Course Outline: 
    // A course has one CourseOutline
    public function courseOutlines()
    {
        return $this->hasOne(CourseOutline::class);
    }
}
