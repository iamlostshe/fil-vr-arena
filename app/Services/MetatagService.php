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


}

