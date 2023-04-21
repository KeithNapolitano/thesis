<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    // protected $redirectTo = RouteServiceProvider::HOME;

    public function authenticated(){
        if(Auth::user()->userlvl == 3){     //admin
            return redirect('/trip/create')->with('status', 'Welcome to Admin Dashboard');
        }
        else if(Auth::user()->userlvl == 2){   //ope
            return redirect('/operator/schedule')->with('status', 'Welcome to Operator Dashboard');
        }
        else{   //user
            return redirect('/dashboard')->with('status', 'Welcome to your Dashboard');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
