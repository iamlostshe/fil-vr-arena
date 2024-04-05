<?php

return [

    /*
     * Language lines will be fetched by these loaders. You can put any class here that implements
     * the Spatie\TranslationLoader\TranslationLoaders\TranslationLoader-interface.
     */
    'translation_loaders' => [
        Spatie\TranslationLoader\TranslationLoaders\Db::class,
    ],

    /*
     * This is the game used by the Db Translation loader. You can put any game here
     * that extends Spatie\TranslationLoader\LanguageLine.
     */
    'game' => Spatie\TranslationLoader\LanguageLine::class,

    /*
     * This is the translation manager which overrides the default Laravel `translation.loader`
     */
    'translation_manager' => Spatie\TranslationLoader\TranslationLoaderManager::class,

];
