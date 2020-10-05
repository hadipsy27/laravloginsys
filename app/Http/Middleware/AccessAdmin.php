<?php

namespace App\Http\Middleware;

use Closure;
// use this class;
use Auth;

class AccessAdmin
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
        // tulis code ini
        // jika satu user
        // if(Auth::user()->hasAnyRole('admin')){
        //     return $next($request);
        // }

        // jika multi user
        if(Auth::user()->hasAnyRoles(['admin','author'])){
            return $next($request);
        }

        return redirect('home');
    }
}
