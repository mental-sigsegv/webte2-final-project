<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class PostmanMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        // Check if the request is coming from Postman
        if (str_contains($request->header('User-Agent'), 'Postman')) {
            return $next($request);
        }

        // Return 403 Forbidden if the request is not from Postman
        return response()->json(['error' => 'Forbidden'], 403);
    }
}
