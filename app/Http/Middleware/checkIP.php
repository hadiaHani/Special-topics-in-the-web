<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class checkIP
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
        if ($request->ip()!= '127.0.0.1') {
            abort(403,'you can not access website from this IP address ');

        }
            return $next($request);

        }
}
