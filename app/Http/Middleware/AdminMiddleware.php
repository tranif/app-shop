<?php

namespace App\Http\Middleware;

use Closure;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        // verificamos que user logueado sea administrador
        if(!auth()->user()->admin)
        {
            return redirect('/');
        }

        return $next($request);
    }
}
