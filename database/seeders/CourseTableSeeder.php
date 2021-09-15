<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name'=>'Android Programming',
            'slug'=>'android-programming',
            'duration'=>'2',
            'status'=>'Offered',
            'course_level'=>'Certificate',
            'description'=>'Good Course'
        ]);

        DB::table('courses')->insert([
            'name'=>'Web Development',
            'slug'=>'web-development',
            'duration'=>'2',
            'status'=>'Offered',
            'course_level'=>'Certificate',
            'description'=>'Good Course'
        ]);
    }
}
