<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebsiteController extends Controller
{
    // function to render homepage
    public function index()
    {
        return view('website.home');
    }
}
