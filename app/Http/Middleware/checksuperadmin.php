<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class checksuperadmin
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
<<<<<<< Updated upstream
        dd("DD en middleware");
        dd($request->all());
        //dd(Auth::user());
        if (Auth::user()->role->name == 'admin') {
=======
        if (Auth::user()->role->name == "admin") {
>>>>>>> Stashed changes
            return $next($request);
        }else{
            return abort('404');
        }
    }
}
