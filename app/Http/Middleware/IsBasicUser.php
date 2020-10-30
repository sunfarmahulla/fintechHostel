<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsBasicUser
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if(Auth::user()->role === 'user' && Auth::user()->activate === 1) {
            return $next($request);
        }else{
            Auth::logout();
            return redirect()->to('/login')->with('warning', 'You are not authorized to access this page');
        }
        
    }
}
