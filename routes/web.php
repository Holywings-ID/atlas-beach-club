<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/daybed', 'daybed')->name('daybed');
    Route::get('/dining', 'dining')->name('dining');
    Route::get('/pool-bar', 'poolbar')->name('poolbar');
    Route::get('/explore', 'explore')->name('explore');
    Route::get('/whats-on', 'whatson')->name('whatson');
    Route::get('/offer', 'offer')->name('offer');
    Route::get('/support', 'support')->name('support');
    Route::get('/reserve', 'reserve')->name('reserve');
});
