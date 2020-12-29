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
        $path=$request->path();
        if(($path=="register" || $path=="login" ) && (Session()->get('user'))){
            return redirect('/home');
        }  
        else if($path!='login' && !Session()->get('user') && $path!='reg' && $path!='log' && $path!='register' && $path!='fg'){
            if(Session()->get('user')){
                return redirect('/home');
            }
            return redirect()->route('log_g');
        }
   
        return $next($request);
    }
}


   