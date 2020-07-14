<?php

namespace LaraDev\Http\Middleware;

use Closure;

class ImovelVisible
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $visible)
    {
        if ( $visible == 1 ) {
            return $next($request);
        } else {
            return redirect()->route('imovels.index');
        }
    }
}
