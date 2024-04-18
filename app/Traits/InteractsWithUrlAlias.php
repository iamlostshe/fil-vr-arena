<?php

namespace App\Traits;


use Fomvasss\UrlAliases\Models\UrlAlias;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

/**
 * Для моделей с алиасами (UrlAlias)
 */
trait InteractsWithUrlAlias {

    /**
     * Получение маршрута для детальной странице материала
     * @return string
     */
    public function getDetailRoute()
    :string {

        return '';
    }

    /**
     * Префикс для псевдонима (ссылка на материал)
     * @return string
     */
    public function getAliasPrefix()
    :string {

        return '';
    }

    /**
     * Создание псевдонима
     * @return void
     */
    public function createAlias()
    :void {
        $locales = array_keys(config('url-aliases-laravellocalization.supportedLocales'));
        foreach($locales as $locale) {
            $this->setLanguage($locale);
            $title = $this->getTitle();
            $this->urlAlias()
                ->create([
                    'source' => trim($this->getDetailRoute(), '/'),
                    'alias' => $this->getAliasPrefix() . Str::slug(Str::lower($title), '-'),
                    'locale' => $locale
                ]);
        }
    }

    /**
     * Удаление псевдонима
     * @return void
     */
    public function deleteAlias()
    :void {

        $this->urlAliases()
            ->get()
            ->each(function($item) {

                $item->delete();
            });
    }

    /**
     * @return ?UrlAlias
     */
    public function getAlias()
    :?UrlAlias {
        return $this->urlAliases()->first();
    }
}
