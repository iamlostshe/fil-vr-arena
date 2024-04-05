<?php

namespace App\Providers;

use App\Facades\UrlAlias;
use App\Facades\UrlAliasLocalization;
use App\Managers\TranslationManager;
use App\Managers\UrlAliasLocalizationManager;
use App\Managers\UrlAliasManager;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(UrlAliasLocalization::class, function ($app) {
            return new UrlAliasLocalizationManager($app);
        });

        $this->app->singleton(UrlAlias::class, function ($app) {
            return new UrlAliasManager($app);
        });
        $this->app->singleton('translation', function ($app) {
            return new TranslationManager($app);
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
