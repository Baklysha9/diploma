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
        if (Auth::check()) {
            if (Auth::user()->isAdmin() != 1) {
                return redirect(route('main'));
            }
        } else {
            abort(404);
        }
        
        return $next($request);
    }
}
