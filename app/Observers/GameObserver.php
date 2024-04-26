<?php

namespace App\Observers;

use App\Constants\EntityFields;
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
     * @param Game $game
     *
     * @return void
     */
    public function updating(Game $game)
    :void {
        $this->saveTranslationsToCache($game);
    }
    /**
     * Handle the Game "created" event.
     */
    public function created(Game $game)
    :void {
        $game->createAlias();
        $this->saveTranslationsToModel($game);
    }

    /**
     * Handle the Game "updated" event.
     */
    public function updated(Game $game)
    :void {
        $this->saveTranslationsToModel($game);
        $game->deleteAlias();
        $game->createAlias();
    }

    /**
     * Handle the Game "deleted" event.
     */
    public function deleted(Game $game)
    :void {
        //
        $game->deleteAlias();
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
        Cache::put($this->getTitleName('en'), $game->title_en, 10);
        Cache::put($this->getDescriptionName('en'), $game->description_en, 10);
        Cache::put($this->getGenreName('en'), $game->genre_en, 10);
        Cache::put($this->getTeaserName('en'), $game->teaser_en, 10);
        Cache::put($this->getTitleName('pt'), $game->title_pt, 10);
        Cache::put($this->getDescriptionName('pt'), $game->description_pt, 10);
        Cache::put($this->getGenreName('pt'), $game->genre_pt, 10);
        Cache::put($this->getTeaserName('pt'), $game->teaser_pt, 10);
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
        $title_en = Cache::get($this->getTitleName('en'));
        $teaser_en = Cache::get($this->getTeaserName('en'));
        $description_en = Cache::get($this->getDescriptionName('en'));
        $genre_en = Cache::get($this->getGenreName('en'));
        $title_pt = Cache::get($this->getTitleName('pt'));
        $teaser_pt = Cache::get($this->getTeaserName('pt'));
        $description_pt = Cache::get($this->getDescriptionName('pt'));
        $genre_pt = Cache::get($this->getGenreName('pt'));
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

    /**
     * @param $language
     *
     * @return string
     */
    public function getTitleName($language)
    :string {

        return match ($language) {
            'pt' => EntityFields::TITLE_PT,
            default => EntityFields::TITLE_EN,
        };
    }

    /**
     * @param $language
     *
     * @return string
     */
    public function getDescriptionName($language)
    :string {

        return match ($language) {
            'pt' => EntityFields::DESCRIPTION_PT,
            default => EntityFields::DESCRIPTION_EN,
        };
    }

    /**
     * @param $language
     *
     * @return string
     */
    public function getTeaserName($language)
    :string {
        return match ($language) {
            'pt' => EntityFields::TEASER_PT,
            default => EntityFields::TEASER_EN,
        };
    }

    /**
     * @param $language
     *
     * @return string
     */
    public function getGenreName($language)
    :string {
        return match ($language) {
            'pt' => EntityFields::GENRE_PT,
            default => EntityFields::GENRE_EN,
        };
    }
}
