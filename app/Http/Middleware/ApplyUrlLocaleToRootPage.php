<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class ApplyUrlLocaleToRootPage
{
    protected $app;

    protected $config;
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure  $next
     *
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    :mixed {
        $this->app = app();
        $this->config = $this->app['config'];

        $supportedLocales = $this->config->get('url-aliases-laravellocalization.supportedLocales');
        Log::info('ApplyUrlLocaleToRootPage: ' . $request->segment(1));
        if (empty($request->segment(1)) || count($request->segments()) == 1 && in_array($request->segment(1), array_keys($supportedLocales))) {
            return $next($request);
        }

        abort(404);
    }
}
