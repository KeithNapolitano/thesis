<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleWare
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        #0-guest, 1-user, 2-ope, 3-admin, 4-superadmin
        if(Auth::check()){
            if(Auth::user()->userlvl == 3 or Auth::user()->userlvl == 4){
                return $next($request);
            }
            else{
                return redirect()->back();
            }
        }
        else{
            return redirect('/login');
        }
        // return $next($request);
    }
}
