<?php

namespace App\Observers;

use App\Constants\EntityFields;
use App\Drivers\MySQL\MySQLTranslationDriver;
use App\Models\StaticPage;
use Illuminate\Support\Facades\Cache;

class StaticPageObserver {
    protected MySQLTranslationDriver $translationDriver;

    /**
     * @param MySQLTranslationDriver $translationDriver
     */
    public function __construct(MySQLTranslationDriver $translationDriver) {

        $this->translationDriver = $translationDriver;
    }

    /**
     * @param StaticPage $model
     *
     * @return void
     */
    public function creating(StaticPage $model)
    :void {
        $this->saveTranslationsToCache($model);
    }

    /**
     * @param StaticPage $model
     *
     * @return void
     */
    public function updating(StaticPage $model)
    :void {
        $this->saveTranslationsToCache($model);
    }
    /**
     * Handle the staticPage "created" event.
     */
    public function created(StaticPage $staticPage)
    :void {

        $this->saveTranslationsToModel($staticPage);
    }

    /**
     * Handle the staticPage "updated" event.
     */
    public function updated(StaticPage $staticPage)
    :void {
        $this->saveTranslationsToModel($staticPage);
    }

    /**
     * Handle the staticPage "deleted" event.
     */
    public function deleted(StaticPage $staticPage)
    :void {
        //
    }

    /**
     * Handle the staticPage "restored" event.
     */
    public function restored(StaticPage $staticPage)
    :void {
        //
    }

    /**
     * Handle the staticPage "force deleted" event.
     */
    public function forceDeleted(StaticPage $staticPage)
    :void {
        //
    }

    /**
     * @param StaticPage $staticPage
     *
     * @return void
     */
    public function saveTranslationsToCache(StaticPage $staticPage)
    :void {
        Cache::put($this->getTitleName('en'), $staticPage->title_en, 10);
        Cache::put($this->getBodyName('en'), $staticPage->body_en, 10);
        Cache::put($this->getTitleName('pt'), $staticPage->title_pt, 10);
        Cache::put($this->getBodyName('pt'), $staticPage->body_pt, 10);
        unset($staticPage->title_en);
        unset($staticPage->body_en);
        unset($staticPage->title_pt);
        unset($staticPage->body_pt);
    }

    /**
     * @param StaticPage $staticPage
     *
     * @return void
     */
    public function saveTranslationsToModel(StaticPage $staticPage) {
        $title_en = Cache::get($this->getTitleName('en'));
        $body_en = Cache::get($this->getBodyName('en'));
        $title_pt = Cache::get($this->getTitleName('pt'));
        $body_pt = Cache::get($this->getBodyName('pt'));
        $this->translationDriver->putTranslationsForModel($staticPage, 'en', [
            'title' => $title_en,
            'body' => $body_en,
        ]);
        $this->translationDriver->putTranslationsForModel($staticPage, 'pt', [
            'title' => $title_pt,
            'body' => $body_pt,
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
    public function getBodyName($language)
    :string {

        return match ($language) {
            'pt' => EntityFields::BODY_PT,
            default => EntityFields::BODY_EN,
        };
    }


}
