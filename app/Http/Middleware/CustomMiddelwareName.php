<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CustomMiddelwareName
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if($request->header('X-API-KEY') !== 'test'){
            //abort(401, 'Unauthorized');
            return response()->json(['message' => 'Unauthorized'], 401);
        }
        return $next($request);
    }
}
