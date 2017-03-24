<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class SellerMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    public function handle($request, Closure $next, $guard =null)
    {
       // dd("ssssssssssssssssss");
        if (Auth::guard($guard)->guest()) {
          //  dd("gggggggggggg");
            return $next($request);
        }
        else{
            return redirect()->guest('/dashboard');
        }
    }


}
