<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
     {
        if(Auth::check()){
            if(\Auth::user()->level != 'admin'){
                return redirect('login')->withErrors('Silahkan Login Terlebih Dahulu');
            }
        } else {
            return redirect('/');
        }
        return $next($request);
    }
}
