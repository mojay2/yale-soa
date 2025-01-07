<?php

namespace App\Http\Controllers;

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
