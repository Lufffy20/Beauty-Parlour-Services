<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class VendorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
            if (!Auth::guard('vendor')->check() || Auth::guard('vendor')->user()->role_as != 2) {
                return redirect('/login')->with('error', 'Unauthorized Access.');
            }
        return $next($request);
    }
}
