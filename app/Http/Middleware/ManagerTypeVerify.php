<?php

namespace App\Http\Middleware;

use Closure;

class ManagerTypeVerify
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
        if($request->session()->get('user_role') == "manager"){
            return $next($request);
        }else{
            return redirect()->route('login.login');
        }
    }
}
