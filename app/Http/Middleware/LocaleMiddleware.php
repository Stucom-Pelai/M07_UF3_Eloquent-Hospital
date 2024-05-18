<?php

namespace App\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */

    protected $languages = ['en', 'es'];


    public function handle($request, Closure $next)
    {       
        if (Session::has('locale') && in_array(Session::get('locale'), $this->languages)) {
            App::setLocale(Session::get('locale'));
        }
        return $next($request);
    }
}