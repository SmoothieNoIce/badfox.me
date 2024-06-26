<?php

namespace App\Http\Middleware;

use Closure;

class AdminLogin
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
    
        if(!session('admin')){
            //echo '尚未登入';
            return redirect('admin/login');
        }else{
            //echo '以登入';
        } 
        return $next($request);
    }
}
