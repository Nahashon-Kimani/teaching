<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseOutline extends Model
{
    use HasFactory, SoftDeletes;

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id', 'id');
    }

    public function users()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }
}
