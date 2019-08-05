<?php

namespace App\Http\Middleware;

use Closure;

class InvestorMiddleware
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
        if ( $request->user() ) :
            if( $request->user()->user_type_id == 3 )
                if( $request->user()->active )
                    return $next($request);
                else
                    abort('506');
            else
                abort('404'); 
                
        else:
           return redirect()->intended('/login');
        endif;
    }
}
