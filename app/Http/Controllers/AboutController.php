<?php

namespace App\Http\Controllers;

// Dashboard contoller for logged in user
class AboutController extends Controller
{
    /**
     * Show the page index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $aboutData = config('aboutdata');

        return view('about', ['aboutData' => $aboutData]);
    }
}
