<?php

namespace App\Http\Middleware;

use Closure;
use illuminate\Support\Facades\App;

class LocaleMiddleware
{
    public function handle($request, Closure $next)
    {
        $locale = session('locale', config('app.locale'));
        App::setLocale($locale);
        return $next($request);
    }

}
