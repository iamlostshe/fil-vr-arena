<?php

use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;
Route::middleware('auth:admin')
    ->prefix('filemanager')
    ->group(function() {

        \UniSharp\LaravelFilemanager\Lfm::routes();

    });
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
Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware'=>[
    'localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function() {

    Route::get('/', function() {

        return view('pages/home');
    })
        ->name('home');
    Route::get('/about', function() {

        return view('pages/about');
    })
        ->name('about');
    Route::get('/contacts', function() {

        return view('pages/contacts');
    })
        ->name('contacts');
    Route::get('/game', function() {

        return view('pages/game');
    })
        ->name('game');
    Route::get('/games', function() {

        return view('pages/games');
    })
        ->name('games');
});
