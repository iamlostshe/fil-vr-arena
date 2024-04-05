<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class UrlAliasLocalization extends Facade
{
    public static function getFacadeAccessor()
    {
        return \App\Managers\UrlAliasLocalizationManager::class;
    }
}
