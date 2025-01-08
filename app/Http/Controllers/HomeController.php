<?php

namespace App\Http\Controllers;

use App\Http\Controllers\PostController;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $homeData = config('homedata');
        $postController = new PostController();
        $posts = $postController->fetchApprovedPosts();

        return view('home', ['homeData' => $homeData, 'posts' => $posts]);
    }
}
