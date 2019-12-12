<?php

namespace App\Http\Middleware;

use Closure;
use App\User;


class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string  $role
     * @return mixed
     */
    public function handle($request, Closure $next, $role)
    {
        if (!$request->user()->isAdmin($role)) {
            return redirect('/home');
         }


        return $next($request);
    }
}
