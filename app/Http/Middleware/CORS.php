<?php

namespace App\Http\Middleware;

use Closure;

class CORS
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
        header('Access-Control-Allow-Origin: *, *localhost:*, *localhost*'); // * means any domain
        header('Access-Control-Allow-Headers: Content-type, X-Auth-Token, Authorization, Origin, X-CSRF-Token');
        header('Access-Control-Allow-Methods: *');
        header('Access-Control-Allow-Credentials: true');
        return $next($request);
    }
}
