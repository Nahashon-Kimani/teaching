<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Calling the seeder class as an array
       $this->call([
           CourseTableSeeder::class, 
           UserTableSeeder::class,
        ]);

        /** Calling seeder classes singly
         * $this->call(CourseTableSeeder::class);
         * $this->call(UserTableSeeder::class)
         */
    }
}
