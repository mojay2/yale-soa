<?php

namespace App\Http\Controllers;

class EventsController extends Controller
{
    /**
     * Show the page index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('events');
    }
}
