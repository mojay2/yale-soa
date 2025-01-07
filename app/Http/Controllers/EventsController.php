<?php

namespace App\Http\Controllers;

// Dashboard contoller for logged in user
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
