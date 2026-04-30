<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/locale/{locale}', function (string $locale) {
    if (in_array($locale, ['en', 'id', 'zh'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('locale.switch');

Route::controller(PageController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/daybed', 'daybed')->name('daybed');
    Route::get('/dining', 'dining')->name('dining');
    Route::get('/pool-bar', 'poolbar')->name('poolbar');
    Route::get('/explore', 'explore')->name('explore');
    Route::get('/explore/family', 'exploreFamily')->name('explore.family');
    Route::get('/explore/couple', 'exploreCouple')->name('explore.couple');
    Route::get('/explore/friends', 'exploreFriends')->name('explore.friends');
    Route::get('/explore/group', 'exploreGroup')->name('explore.group');
    Route::get('/menu', 'menu')->name('menu');
    Route::get('/activities', 'activities')->name('activities');
    Route::get('/whats-on', 'whatson')->name('whatson');
    Route::get('/offer', 'offer')->name('offer');
    Route::get('/support', 'support')->name('support');
    Route::get('/support/qa', 'supportQa')->name('support.qa');
    Route::get('/support/terms', 'supportTerms')->name('support.terms');
    Route::get('/reserve', 'reserve')->name('reserve');
    Route::get('/reserve/booking', 'booking')->name('booking');
    Route::get('/reserve/event', 'eventReserve')->name('event.reserve');
    Route::get('/reserve', 'reserve')->name('reserve');
    Route::get('/thankyou', 'thankyou')->name('thankyou');
});
