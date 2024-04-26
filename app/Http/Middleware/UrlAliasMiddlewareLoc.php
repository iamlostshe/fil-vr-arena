<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Str;

class UrlAliasMiddlewareLoc extends UrlAliasMiddleware {

    /**
     * Remake request.
     *
     * @param Request $request
     * @param $urlModel
     *
     * @return Request
     */
    protected function makeNewRequest(Request $request, $urlModel, $getParams = []) {

        $newRequest = $request;
        $newRequest->server->set('REQUEST_URI', App::getLocale() . '/' . $urlModel->source);
        $newRequest->initialize($request->query->all(), $request->request->all(), $request->attributes->all(), $request->cookies->all(), $request->files->all(), $newRequest->server->all() + [
                'ALIAS_REQUEST_URI' => $request->path(),
                'ALIAS_ID' => $urlModel->id,
                'ALIAS_LOCALE_BOUND' => $urlModel->locale_bound
            ], $request->getContent());

        $newRequest->merge($getParams);

        return $newRequest;
    }

    /**
     * @param $request
     * @param \Closure $next
     *
     * @return mixed
     */
    public function customize($request, Closure $next, $path) {

        if (!in_array($path, ['en', 'pt'])) {
            $ignore = $this->app['config']->get('url-aliases.ignored_paths');
            $isIgnore = FALSE;
            foreach ($ignore as $pattern) {
                if (Str::is($pattern, $path)) {
                    $isIgnore = TRUE;
                    break;
                }
            }
            if (!$isIgnore)
                $path = App::getLocale() . '/' . $path;
        }

        $newRequest = $request;
        $newRequest->server->set('REQUEST_URI', $path);
        $newRequest->initialize($request->query->all(), $request->request->all(), $request->attributes->all(), $request->cookies->all(), $request->files->all(), $newRequest->server->all(), $request->getContent());

        return $next($request);
    }
}
