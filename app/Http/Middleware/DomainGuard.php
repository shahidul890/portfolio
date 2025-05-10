<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DomainGuard
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $hostname = $request->getHost();
        
        // Define the valid hostnames
        $validHostNames = [
            'mdshahidul.com',
            'mdshahidul.localhost',
            'www.mdshahidul.com',
            'localhost'
        ];

        if(in_array($hostname, $validHostNames))
            return $next($request);
        else
            return redirect('https://mdshahidul.com');
    }
}
