<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class UserAuth
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        if($request->path()=="login"&&$request->session()->has('user')){
            return redirect('/');
        }
        
        if($request->path()=="admin"&&$request->session()->has('user')=="admin123"){
            return redirect('admin/admin-page');
        }
        if($request->path()=="registration"&&$request->session()->has('user')){
            return redirect('/');
        }
        
        return $next($request);
    }
}
