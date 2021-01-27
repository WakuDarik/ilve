<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\App;

class SetLocale
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
        // dd(session('locale'));
        if (session('locale') && !empty(session('locale'))) {
            $langPrefix = session('locale');
        } else {
            $langPrefix = ltrim($request->route()->getPrefix(), '/');
        }
        if ($langPrefix) {
            App::setlocale($langPrefix);
        }
        return $next($request);
    }
}
