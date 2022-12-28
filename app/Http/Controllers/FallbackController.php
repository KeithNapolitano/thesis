<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FallbackController extends Controller
{
    //uses invoke because will only use 1 func
    public function __invoke()
    {
        return view('fallback.index');
    }
} 
