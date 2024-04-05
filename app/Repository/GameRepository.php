<?php

namespace App\Repository;

use App\Models\Game;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class GameRepository {
    /**
     * @return Builder
     */
    public function getQuery() {

        return Game::query();
    }

    /**
     * @return Builder
     */
    public function getActivePrepared() {

        return $this->getQuery()
            ->with('urlAlias')
            ->where('status', TRUE);
    }

    /**
     * @return Builder[]|Collection
     */
    public function all() {

        return $this->getActivePrepared()
            ->orderBy('weight')
            ->get();
    }

    /**
     * @param int $id
     *
     * @return Builder|Model|object|null
     */
    public function getById(int $id) {

        return $this->getActivePrepared()
            ->where('id', $id)
            ->first();
    }
}
