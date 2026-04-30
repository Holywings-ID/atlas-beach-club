<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PageController
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function daybed(): View
    {
        return view('pages.daybed');
    }

    public function dining(): View
    {
        return view('pages.dining');
    }

    public function poolbar(): View
    {
        return view('pages.poolbar');
    }

    public function activities(): View
    {
        return view('pages.activities');
    }

    public function explore(): View
    {
        return view('pages.explore');
    }

    public function exploreFamily(): View
    {
        return view('pages.explore-family');
    }

    public function exploreCouple(): View
    {
        return view('pages.explore-couple');
    }

    public function exploreFriends(): View
    {
        return view('pages.explore-friends');
    }

    public function exploreGroup(): View
    {
        return view('pages.explore-group');
    }
    public function menu(): View
    {
        return view('pages.menu');
    }

    public function whatson(): View
    {
        return view('pages.whatson');
    }

    public function offer(): View
    {
        return view('pages.offer');
    }

    public function support(): View
    {
        return view('pages.support');
    }

    public function supportQa(): View
    {
        return view('pages.support-qa');
    }

    public function supportTerms(): View
    {
        return view('pages.support-terms');
    }

    public function reserve(): View
    {
        return view('pages.reserve');
    }
    public function booking(): View
    {
        return view('pages.booking');
    }

    public function eventReserve(): View
    {
        return view('pages.event-reserve', [
            'eventName' => request('event', 'Event'),
            'eventDate' => request('date', ''),
            'eventImage' => request('image', 'event1.png'),
        ]);
    }
    public function thankyou(): View
    {
        return view('pages.thankyou');
    }
}
