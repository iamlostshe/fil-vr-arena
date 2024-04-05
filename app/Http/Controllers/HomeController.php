<?php

namespace App\Http\Controllers;

use App\Constants\RouteNames;
use App\Services\FaqService;
use App\Services\GameService;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller {
    /**
     * @var GameService $gameService
     */
    protected GameService $gameService;

    protected FaqService $faqService;

    /**
     * @param GameService $gameService
     */
    public function __construct(GameService $gameService, FaqService $faqService) {

        $this->gameService = $gameService;
        $this->faqService = $faqService;

    }

    /**
     * @return array|false|Application|Factory|View|\Illuminate\Foundation\Application|mixed
     */
    public function index() {

        $games = $this->gameService->getAll();
        $faqs = $this->faqService->getAll();

        return view('pages.home', compact('games', 'faqs'));
    }
}
