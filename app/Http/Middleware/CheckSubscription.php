<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class CheckSubscription
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
        if(Auth::check()){
            if (Auth::user()->subscribed('main')) {
                return $next($request);
            }else{
                return redirect('/pay');
            }
        }else{
            abort(403, 'Unauthorized action.');
        }
        return $next($request);
    }
}
