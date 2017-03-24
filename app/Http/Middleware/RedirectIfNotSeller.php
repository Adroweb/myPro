<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Session;

class RedirectIfNotSeller
{
	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @param  string|null  $guard
	 * @return mixed
	 */
    public function handle($request, Closure $next,$guard ='null')
    {
        if (Session::has('sname'))
        {
            return $next($request);
        }
        else
        {
            return redirect()->guest('/sellerlogin');
        }

    }
}