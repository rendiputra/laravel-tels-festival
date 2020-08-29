<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
class verified
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
        if(Auth::user()->email_verfied_at != NULL){
            return redirect('/verif_email');
        }
        return $next($request);
    }
}
