<?php

namespace App\Http\Middleware;

use Closure;
use function Faker\Provider\pt_BR\check_digit;

class MyWare
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
        if(auth()->check()){
            return $next($request);
        }

        return redirect('login');
    }
}
