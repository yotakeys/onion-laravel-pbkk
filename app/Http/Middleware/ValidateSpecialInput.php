<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ValidateSpecialInput
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if ($request->input('password') == 'qwerty'){
            return $next($request);
        }

        return \response()->json(
            [
                'success' => false,
                'message ' => 'hayo ngpaain coba coba'
            ]
        );
    }
}
