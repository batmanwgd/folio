<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Baws
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
        if(auth()->user()->baws == 1){
            return $next($request);
        }

        return redirect('/')->with(route('login'),"You don't have admin access.");
    }
}
