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

    public function explore(): View
    {
        return view('pages.explore');
    }

    public function exploreDetail(): View
    {
        return view('pages.exploredetail');
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

    public function reserve(): View
    {
        return view('pages.reserve');
    }
    public function booking(): View
    {
        return view('pages.booking');
    }
}
