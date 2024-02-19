<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class DomingoMiddleware
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
        echo '<p>';
        echo date('w') === '0' ? "Es domingo!" : "No es domingo";
        echo '</p>';

        return $next($request);
    }
}
