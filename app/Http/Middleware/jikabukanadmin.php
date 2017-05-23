<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class jikabukanadmin
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
           if(Auth::check()){
            if(Auth::user()->level != 'admin'){
                return redirect('/login')->with('informasi',"ANDA TIDAK BERHAK");
            }
        } else {
            return redirect('/');
        }
        return $next($request);
    
    }
}
