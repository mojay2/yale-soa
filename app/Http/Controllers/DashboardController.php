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
        $postController = new PostController();
        $contacts = $contactController->fetchContacts();
        $posts = $postController->fetchPosts();

        return view('dashboard', ['contacts' => $contacts, 'posts' => $posts]);
    }
}
