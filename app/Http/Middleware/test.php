<?php

namespace App\Http\Middleware;
use Closure;

class test
{
    /**
    * Handle an incoming request.
    *
    * @param
    * @param
    * @return
 */


    public function handle($request, Closure $next)
    {
        $ip=$request->ip();
        if($ip=='127.0.0.1'){
            throw new \Exception("Your Ip is correct");
        }
        return $next($request);
    }
}
