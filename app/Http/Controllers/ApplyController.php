<?php

namespace App\Http\Controllers;

class ApplyController extends Controller
{
    /**
     * Show the page index.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('apply');
    }
}
