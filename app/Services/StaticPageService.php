<?php

namespace App\Services;


use App\Http\Controllers\StaticPageController;
use App\Models\StaticPage;
use App\Constants\StaticPage as StaticPageConstants;
use App\Repository\StaticPageRepository;

/**
 * Сервис для работы со статическими страницами.
 * Работает с использованием констант StaticPageConstants
 */
class StaticPageService {

    /**
     * @var StaticPageRepository
     */
    protected StaticPageRepository $staticPageRepository;

    /**
     * @param StaticPageRepository $staticPageRepository
     */
    public function __construct(StaticPageRepository $staticPageRepository) {

        $this->staticPageRepository = $staticPageRepository;
    }

    /**
     * @param string $pageKey
     *
     * @return ?\Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function getByPageKey(string $pageKey) {

        return $this->staticPageRepository->getByPageKey($pageKey);
    }

    public static function getRoute($page_key) {

        return StaticPageConstants::PAGE_KEY_LIST[$page_key]['route'];
    }

    /**
     * Получение списка маршрутов для статических страниц (зарегистрированных в константах)
     * @return array
     */
    public function getRoutes()
    :array {

        $staticPages = [];
        $allPlacedPages = StaticPageConstants::PAGE_KEY_LIST;
        foreach ($allPlacedPages as $pageKey => $pageData) {
            $staticPages[] = $pageData['route'];
        }

        return $staticPages;
    }


    /**
     * Загрузка маршрутов для статических страниц
     * @return void
     */
    public static function routes()
    :void {

        $allPlacedPages = StaticPageConstants::PAGE_KEY_LIST;
        foreach ($allPlacedPages as $pageKey => $pageData) {
            \Route::get($pageData['prefix_path'] . $pageKey, [StaticPageController::class, 'page'])
                ->name($pageData['route'])
                ->defaults('pageKey', $pageKey);
        }
    }

}
