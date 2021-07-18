<?php

namespace App\Http\Middleware;

use Closure;

class lang
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  Array  [section name , role name]
     * @return mixed
     */
    public function handle($request,Closure $next)
    {
        $lang= session()->get('locale');
    
        app()->setLocale($lang);

        return $next($request);

    }
}
