<?php

namespace App\Http\Middleware;

use Auth;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminGuestMiddleware {
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle( Request $request, Closure $next ): Response {
        if ( Auth::user() ) {
            return $next( $request );
            return redirect()->route( "admin.dashboard" );

        } else {
            return $next( $request );
            return redirect()->route( "admin.login" );

        }

    }
}