<?php

namespace App\Facades;

use Illuminate\Support\Facades\Facade;

class UrlAlias extends Facade
{
    public static function getFacadeAccessor()
    :string {
        return \App\Managers\UrlAliasManager::class;
    }
}
