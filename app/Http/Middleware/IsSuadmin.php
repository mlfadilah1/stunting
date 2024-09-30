<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class IsSuadmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(auth()->user()->level == 'Admin' || auth()->user()->level == 'Tim Ahli'|| auth()->user()->level == 'Pengguna'){
            return $next($request);
            }
    
            abort(403, "You don't have Admin access.");
    }
}
