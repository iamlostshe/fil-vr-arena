<?php

namespace App\Http\Controllers;

use App\Models\StaticPage;
use App\Services\StaticPageService;
use Illuminate\Http\Request;

/**
 *
 */
class StaticPageController extends Controller {


    /**
     * @var StaticPageService
     */
    protected StaticPageService $staticPageService;

    /**
     * @param StaticPageService $staticPageService
     */
    public function __construct(StaticPageService $staticPageService) {

        $this->staticPageService = $staticPageService;
    }

    /**
     * @param $pageKey
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function page($pageKey)
    :\Illuminate\Contracts\View\View|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application {

        $page = $this->staticPageService->getByPageKey($pageKey);
        if (empty($page))
            abort(404);
        $view = 'pages.page';
        if ($pageKey == 'about') {
            $view = 'pages.about';
        }


        return view($view, compact('page'));
    }
}
