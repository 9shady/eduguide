<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class Supervisor1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    function handle($request, Closure $next)
{
    if (Auth::check() && Auth::admins()->role == 'supervisor1') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::admins()->role == 'Supervisor2') {
        return redirect('/supervisor2');
    }
    else {
        return redirect('/admin');
    }
}
}
