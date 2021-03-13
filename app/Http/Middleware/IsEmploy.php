<?php

namespace App\Http\Middleware;

use Closure;

class IsEmploy
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
      if(auth()->user()->is_admin == 2){
          return $next($request);
      }

    return $next($request);
  }

}
