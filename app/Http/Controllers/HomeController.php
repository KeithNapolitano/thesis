<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //USE INVOKE IF YOU WILL USE ONE METHOD ONLY INSIDE A CONTROLLER
    public function __invoke()
    {
        return view('home');
    }
}
