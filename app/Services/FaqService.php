<?php

namespace App\Services;

use App\Repository\FaqRepository;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

class FaqService {

    protected FaqRepository $faqRepository;

    /**
     * @param FaqRepository $faqRepository
     */
    public function __construct(FaqRepository $faqRepository) {

        $this->faqRepository = $faqRepository;
    }

    /**
     * @return Builder[]|Collection
     */
    public function getAll() {

        return $this->faqRepository->all();
    }

    /**
     * @param $game_id
     *
     * @return Builder|Model|object|null
     */
    public function getById($game_id) {

        return $this->faqRepository->getById($game_id);
    }
}
