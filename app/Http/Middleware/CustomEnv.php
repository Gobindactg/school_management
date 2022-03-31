<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CustomEnv
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $request->env = [
            "PROJECT_NAME" => env('PROJECT_NAME'),
            "INSTITUTION_NAME" => env('INSTITUTION_NAME'),
            "EIIN" => env('EIIN'),
            "ESTD" => env('ESTD'),
        ];
        return $next($request);
    }
}
