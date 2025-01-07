<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ContactController;

class DashboardController extends Controller
{
    /**
     * Create a new controller with auth.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $contactController = new ContactController();
        $contacts = $contactController->fetchContacts();

        return view('dashboard', compact('contacts'));
    }
}
