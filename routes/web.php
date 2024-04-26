<?php

use App\Constants\RouteNames;
use App\Http\Controllers\GameController;
use App\Http\Controllers\HomeController;
use App\Services\StaticPageService;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::redirect('/home', '/');
Route::redirect('/index.php', '/');
Route::group([
    'prefix' => LaravelLocalization::setLocale(),
//    'middleware' => [
//        'localeSessionRedirect',
//        'localizationRedirect',
//        'localeViewPath',
//    ]
], function() {
    StaticPageService::routes();
    Route::get('/', [HomeController::class, 'index'])
        ->name('home');
    Route::get('/games', [GameController::class, 'index'])
        ->name(RouteNames::GAMES);
    Route::get('/games/{game}', [GameController::class, 'show'])
        ->name(RouteNames::GAMES_DETAIL);


});
