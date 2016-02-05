<?php

namespace App\Http\Middleware;

use Illuminate\Support\Facades\Auth;

use Closure;

class SimpleAuthMiddleware
{
    
   public function handle($request, Closure $next)
   {
      return Auth::onceBasic('username') ?: $next($request);
   }
 
}
 