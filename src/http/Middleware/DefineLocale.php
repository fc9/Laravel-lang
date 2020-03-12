<?php

namespace Fc9\Lang\Http\Middleware;

use Closure;
use Fc9\Lang\Lang;

class DefineLocale
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        Lang::index($request);
        return $next($request);
    }

}
