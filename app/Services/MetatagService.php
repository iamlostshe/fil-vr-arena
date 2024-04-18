<?php

namespace App\Services;

use App\Constants\RouteNames;
use App\Models\Metatag;
use App\Repository\MetatagRepository;
use Butschster\Head\Contracts\MetaTags\MetaInterface;
use Butschster\Head\Facades\Meta;
use Butschster\Head\Packages\Entities\OpenGraphPackage;
use Butschster\Head\Packages\Entities\TwitterCardPackage;
use Illuminate\Support\Facades\Request;
use Illuminate\Support\Facades\Route;

class MetatagService {

    /**
     * Получение метатегов для текущей страницы
     * @return metatag|null
     */
    public static function getCurrent() {

        $metatagRepository = app(MetatagRepository::class);
        $uri = Request::getRequestUri();
        $metatag = $metatagRepository->getByUri($uri);

        return $metatag;
    }


    /**
     * Получение метатегов для текущей страницы в виде html
     * @return string
     */
    public static function getCurrentHtml()
    :string {

        $route = Route::current();
        $metatag = self::getCurrent();
        if (empty($metatag)) {

            return '';
        }
        $image = self::getImage($route);
        $meta = self::getMeta($metatag);
        $og = self::getOgMeta($metatag, $image);
        $twitter = self::getTwitterMeta($metatag, $image);


        $html = $meta->toHtml() . $og->toHtml() . $twitter->toHtml();

        return $html;
    }

    public static function getDefaultMetatag($route) {
        $route_name = $route->getName();
        $title = '';
        $description = '';
        $keywords = '';
        if($route_name === RouteNames::GAMES_DETAIL) {
            $game_id = $route->parameter('id');
            $game = app(GameService::class)->getById($game_id);
            $title = $game->title;
            $description = $game->description;
        }
    }

    /**
     * @param $metatag
     * @param $image
     *
     * @return TwitterCardPackage
     */
    public static function getTwitterMeta($metatag, $image) {

        $title = $metatag->getTitle();
        $site_name = env('SITE_NAME');
        $app_url = env('APP_URL');
        $twitter = new TwitterCardPackage('some_name');
        $twitter->setTitle($title);
        $twitter->setImage($image);
        $twitter->addMeta('url', $app_url);
        $twitter->addMeta('card', $site_name);

        return $twitter;
    }

    /**
     * @param $metatag
     *
     * @return MetaInterface
     */
    public static function getMeta($metatag) {

        $title = $metatag->getTitle();
        $description = $metatag->getDescription();
        $keywords = $metatag->getKeywords();
        $meta = Meta::prependTitle($title);
        if (!empty($metatag->getDescription())) {
            $meta = $meta->setDescription($description);
        }
        if (!empty($metatag->getKeywords())) {
            $meta = $meta->setKeywords($keywords);
        }

        return $meta;
    }

    /**
     * @param $metatag
     * @param $image
     *
     * @return OpenGraphPackage
     */
    public static function getOgMeta($metatag, $image) {

        $title = $metatag->getTitle();
        $description = $metatag->getDescription();
        $site_name = env('SITE_NAME');
        $app_url = env('APP_URL');
        $og = new OpenGraphPackage('some_name');
        $og->setSiteName($site_name);
        $og->setTitle($title);
        $og->setType('website');
        $og->addImage($image, [
            'secure_url' => $app_url,
            'type' => self::getTypeByImageURL($image),
            'width' => '400',
            'height' => '300',
            'url' => $app_url
        ]);
        if (!empty($metatag->getDescription())) {
            $og = $og->setDescription($description);
        }

        return $og;
    }

    /**
     * @param $route
     *
     * @return string
     * @throws \Exception
     */
    public static function getImage($route) {

        $gameService = app(GameService::class);
        if($route === NULL) {
            return self::getDefaultImage();
        }
        $route_name = $route->getName();
        if ($route_name === RouteNames::GAMES_DETAIL) {
            $id = $route->parameter('id');
            $game = $gameService->getById($id);

            return $game->poster();
        }

        return self::getDefaultImage();
    }

    /**
     * @throws \Exception
     */
    public static function getDefaultImage() {

        return asset('/img/poster.jpg');
    }

    /**
     * @param $url
     *
     * @return string|void
     */
    public static function getTypeByImageURL($url) {

        $type = pathinfo($url, PATHINFO_EXTENSION);
        $type = strtolower($type);
        if ($type === 'jpg' || $type === 'jpeg') {
            return 'image/jpeg';
        }
        if ($type === 'png') {
            return 'image/png';
        }
        if ($type === 'gif') {
            return 'image/gif';
        }
        if ($type === 'webp') {
            return 'image/webp';
        }
        if ($type === 'svg') {
            return 'image/svg+xml';
        }
    }

}

