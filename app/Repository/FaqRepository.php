<?php

namespace App\Repository;

use App\Models\Faq;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class FaqRepository {
    /**
     * @return Builder
     */
    public function getQuery() {

        return Faq::query();
    }


    /**
     * @return Builder[]|Collection
     */
    public function all() {

        return $this->getQuery()
            ->orderBy('weight')
            ->get();
    }

    /**
     * @param int $id
     *
     * @return Builder|Model|object|null
     */
    public function getById(int $id) {

        return $this->getQuery()
            ->where('id', $id)
            ->first();
    }
}
