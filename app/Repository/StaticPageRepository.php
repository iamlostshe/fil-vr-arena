<?php

namespace App\Repository;

use App\Constants\EntityFields;
use App\Models\StaticPage;
use Illuminate\Database\Eloquent\Builder;


/**
 *
 */
class StaticPageRepository {
    /**
     * @return Builder
     */
    public function getQuery() {

        return StaticPage::query();
    }

   public function getActivePrepared() {

    return $this->getQuery()
        ->where('status', TRUE);
}
    /**
     * @param string $pageKey
     *
     * @return ?Builder|\Illuminate\Database\Eloquent\Model|object
     */
    public function getByPageKey(string $pageKey) {

        return $this->getActivePrepared()
            ->where(EntityFields::PAGE_KEY, $pageKey)
            ->first();
    }

}
