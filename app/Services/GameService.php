<?php

namespace App\Services;

use App\Repository\GameRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class GameService {

    protected GameRepository $gameRepository;

    /**
     * @param GameRepository $gameRepository
     */
    public function __construct(GameRepository $gameRepository) {

        $this->gameRepository = $gameRepository;
    }

    /**
     * @return Builder[]|Collection
     */
    public function getAll() {

        return $this->gameRepository->all();
    }

    /**
     * @param $game_id
     *
     * @return Builder|Model|object|null
     */
    public function getById($game_id) {

        return $this->gameRepository->getById($game_id);
    }
}
