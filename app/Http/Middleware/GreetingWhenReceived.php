<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class GreetingWhenReceived
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
        if ($request->is('greeting/*')) {
            echo 'holaaaa';
            $url = $request->url();
            $index = strpos($url, '/');
            $greeting = $index != false ? substr($url, $index) : null;
            echo 'the greeting is: ' . $greeting;

            if (isset($greeting)) {
                echo '<h1>the greeting is: ' . $greeting . '</h1>';
            }
        }
        return $next($request);
    }
}
