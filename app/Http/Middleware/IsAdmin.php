<?php

namespace App\Http\Middleware;

use Closure;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        //dd($request);
        if ($user = $request->user()) {

            if ($user->is_admin === 1) {

                return $next($request);
            }
        }
        abort(403);
    }
}
