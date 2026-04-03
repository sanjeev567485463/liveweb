<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class EdgeCachePrimer
{
    /**
     * Handle an incoming request.
     *
     * Keep requests flowing normally in production.
     * Silent empty responses here make debugging impossible on shared hosting.
     */
    public function handle(Request $request, Closure $next)
    {
        return $next($request);
    }
}

