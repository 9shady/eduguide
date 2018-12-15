<?php

namespace App\Http\Middleware;
use Auth;
use Closure;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
{
    if (Auth::check() && Auth::admins()->role == 'manager') {
        return $next($request);
    }
    elseif (Auth::check() && Auth::admins()->role == 'Supervisor1') {
        return redirect('/supervisor1');
    }
    else {
        return redirect('/supervisor2');
    }
}
}
