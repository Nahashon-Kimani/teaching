<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    use HasFactory;

    /**
     * A unit belongs to a course. 
     * Implementation; 
     * 
     * We are to create a function courses that will return 
     * a unit(this) belongs to a Course class
     * Belongs to has 3 parameters: Parent Class, foreign key and the owner key
     * In this example, 
     *          Parent Class is Course::class,
     *          Foreign Key: course_id
     *          Owner key: id, primary key
     * 
     */

     public function courses()
     {
         return $this->belongsTo(Course::class, 'course_id', 'id');
     }

     public function lessons()
     {
         return $this->hasMany(Lesson::class);
     }
}
