<?php

namespace Recipes\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\User;
class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard=null)
    {
        if (Auth::user()->isAdmin == 1){
            return $next($request);
        }
        else
        {
            return redirect()->route('/recipes');
        }
    }
}
