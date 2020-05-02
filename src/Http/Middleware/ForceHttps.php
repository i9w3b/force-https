<?php

namespace I9W3b\ForceHttps\Http\Middleware;

use Closure;
use Request;
use Illuminate\Support\Facades\URL;

class ForceHttps
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
        $url = Request::url();
        if (config('forcehttps.force_https') && empty($_SERVER['HTTPS'])) {
          return redirect(str_replace("http:", "https:", $url));
        }
        return $next($request);
    }
}
