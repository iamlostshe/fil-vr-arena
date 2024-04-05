<?php

namespace App\Http\Controllers;

use App\Constants\RouteNames;
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

    /**
     * @param GameService $gameService
     */
    public function __construct(GameService $gameService) {

        $this->gameService = $gameService;

    }

    /**
     * @return array|false|Application|Factory|View|\Illuminate\Foundation\Application|mixed
     */
    public function index() {

        $games = $this->gameService->getAll();

        return view('pages.home', compact('games'));
    }
}
