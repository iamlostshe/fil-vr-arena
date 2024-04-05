<?php

namespace App\Observers;

use App\Constants\RouteNames;
use App\Drivers\MySQL\MySQLTranslationDriver;
use App\Models\Game;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class GameObserver {
    protected MySQLTranslationDriver $translationDriver;

    /**
     * @param MySQLTranslationDriver $translationDriver
     */
    public function __construct(MySQLTranslationDriver $translationDriver) {

        $this->translationDriver = $translationDriver;
    }

    /**
     * @param Game $model
     *
     * @return void
     */
    public function creating(Game $model)
    :void {
        $this->saveTranslationsToCache($model);
    }

    /**
     * @param Game $model
     *
     * @return void
     */
    public function updating(Game $model)
    :void {
        $this->saveTranslationsToCache($model);
    }
    /**
     * Handle the Game "created" event.
     */
    public function created(Game $game)
    :void {

        $this->saveTranslationsToModel($game);
    }

    /**
     * Handle the Game "updated" event.
     */
    public function updated(Game $game)
    :void {
        $this->saveTranslationsToModel($game);
    }

    /**
     * Handle the Game "deleted" event.
     */
    public function deleted(Game $game)
    :void {
        //
    }

    /**
     * Handle the Game "restored" event.
     */
    public function restored(Game $game)
    :void {
        //
    }

    /**
     * Handle the Game "force deleted" event.
     */
    public function forceDeleted(Game $game)
    :void {
        //
    }

    /**
     * @param Game $game
     *
     * @return void
     */
    public function saveTranslationsToCache(Game $game)
    :void {
        Cache::put('title_en', $game->title_en, 10);
        Cache::put('description_en', $game->description_en, 10);
        Cache::put('genre_en', $game->genre_en, 10);
        Cache::put('title_pt', $game->title_pt, 10);
        Cache::put('description_pt', $game->description_pt, 10);
        Cache::put('genre_pt', $game->genre_pt, 10);
        Cache::put('teaser_en', $game->teaser_en, 10);
        Cache::put('teaser_pt', $game->teaser_pt, 10);
        unset($game->title_en);
        unset($game->teaser_en);
        unset($game->description_en);
        unset($game->genre_en);
        unset($game->title_pt);
        unset($game->teaser_pt);
        unset($game->description_pt);
        unset($game->genre_pt);
    }

    /**
     * @param Game $game
     *
     * @return void
     */
    public function saveTranslationsToModel(Game $game) {
        $title_en = Cache::get('title_en');
        $teaser_en = Cache::get('teaser_en');
        $description_en = Cache::get('description_en');
        $genre_en = Cache::get('genre_en');
        $title_pt = Cache::get('title_pt');
        $teaser_pt = Cache::get('teaser_pt');
        $description_pt = Cache::get('description_pt');
        $genre_pt = Cache::get('genre_pt');
        $this->translationDriver->putTranslationsForModel($game, 'en', [
            'title' => $title_en,
            'description' => $description_en,
            'teaser' => $teaser_en,
            'genre' => $genre_en,
        ]);
        $this->translationDriver->putTranslationsForModel($game, 'pt', [
            'title' => $title_pt,
            'description' => $description_pt,
            'teaser' => $teaser_pt,
            'genre' => $genre_pt,
        ]);
    }
}
