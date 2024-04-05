<?php

namespace App\Observers;

use App\Constants\EntityFields;
use App\Constants\RouteNames;
use App\Drivers\MySQL\MySQLTranslationDriver;
use App\Models\Faq;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class FaqObserver {
    protected MySQLTranslationDriver $translationDriver;

    /**
     * @param MySQLTranslationDriver $translationDriver
     */
    public function __construct(MySQLTranslationDriver $translationDriver) {

        $this->translationDriver = $translationDriver;
    }

    /**
     * @param Faq $model
     *
     * @return void
     */
    public function creating(Faq $model)
    :void {

        $this->saveTranslationsToCache($model);
    }

    /**
     * @param Faq $model
     *
     * @return void
     */
    public function updating(Faq $model)
    :void {

        $this->saveTranslationsToCache($model);
    }

    /**
     * Handle the Faq "created" event.
     */
    public function created(Faq $faq)
    :void {

        $this->saveTranslationsToModel($faq);
    }

    /**
     * Handle the Faq "updated" event.
     */
    public function updated(Faq $faq)
    :void {

        $this->saveTranslationsToModel($faq);
    }

    /**
     * Handle the Faq "deleted" event.
     */
    public function deleted(Faq $faq)
    :void {
        //
    }

    /**
     * Handle the Faq "restored" event.
     */
    public function restored(Faq $faq)
    :void {
        //
    }

    /**
     * Handle the Faq "force deleted" event.
     */
    public function forceDeleted(Faq $faq)
    :void {
        //
    }

    /**
     * @param Faq $faq
     *
     * @return void
     */
    public function saveTranslationsToCache(Faq $faq)
    :void {

        Cache::put($this->getTitleName('en'), $faq->title_en, 10);
        Cache::put($this->getDescriptionName('en'), $faq->description_en, 10);
        Cache::put($this->getTitleName('pt'), $faq->title_pt, 10);
        Cache::put($this->getDescriptionName('pt'), $faq->description_pt, 10);
        unset($faq->title_en);
        unset($faq->description_en);
        unset($faq->title_pt);
        unset($faq->description_pt);
    }

    /**
     * @param Faq $faq
     *
     * @return void
     */
    public function saveTranslationsToModel(Faq $faq) {

        $title_en = Cache::get($this->getTitleName('en'));
        $description_en = Cache::get($this->getDescriptionName('en'));
        $title_pt = Cache::get($this->getTitleName('pt'));
        $description_pt = Cache::get($this->getDescriptionName('pt'));
        $this->translationDriver->putTranslationsForModel($faq, 'en', [
            'title' => $title_en,
            'description' => $description_en,
        ]);
        $this->translationDriver->putTranslationsForModel($faq, 'pt', [
            'title' => $title_pt,
            'description' => $description_pt,
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

}
