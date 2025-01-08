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

    /**
     * Show the page index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function graduateStudyAreasIndex()
    {
        $studyAreas = config('studydata');
        return view('study-areas', ['studyAreas' => $studyAreas]);
    }

    /**
     * Show the page index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function undergraduateIndex()
    {
        return view('undergraduate');
    }
}
