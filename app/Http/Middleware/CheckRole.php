<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
      $role = Auth::user()->role;
      if($guard == $role)
        return $next($request);
      else if($guard == null)
        return redirect(''.$role);
    }
}
