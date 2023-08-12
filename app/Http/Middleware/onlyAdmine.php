<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class onlyAdmine
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {  
    //    check if there is authenticated user then check if it has this username
        if(auth()->user()?->username!='esrasaif' )
           {
            abort(403);
           }

        return $next($request);
    }
}
