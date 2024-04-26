<?php

namespace App\Repository;

use App\Models\Faq;
use App\Models\Metatag;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class MetatagRepository {
    /**
     * @return Builder
     */
    public function getQuery() {

        return Metatag::query();
    }

    /**
     * @param $url
     *
     * @return mixed
     */
    public function getByUri($uri) {

        return Metatag::where('uri', $uri)->first();
    }
}
