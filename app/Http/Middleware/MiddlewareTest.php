<?php

namespace App\Http\Middleware;

use Closure;

class MiddlewareTest
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
        echo 'lllk,middleware<br/>';
        print_r($request->ip());
//         print_r($request->path());
        echo '<br/>';
        return $next($request);
    }
}
