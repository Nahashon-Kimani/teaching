<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void 
     */
    public function run()
    {
        DB::insert([
            'name'=>'Peter',
            'email'=>'peter@gmail.com',
            'password'=>Hash::make('pater1234'),
        ]);

        DB::insert([
            'name'=>'Jane',
            'email'=>'jane@gmail.com',
            'password'=>Hash::make('jane1234'),
        ]);

        DB::insert([
            //genereating random values
            'name'=>Str::random(6), 
            'email'=>Str::random(12).'@gmail.com',
            'password'=>Hash::make('mypassword'),
        ]);
    }
}
