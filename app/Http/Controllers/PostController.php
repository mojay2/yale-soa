<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    /**
     * Fetch all posts from the database.
     *
     * @return \Illuminate\Support\Collection
     */
    public function fetchPosts()
    {
        return Post::all();
    }

    /**
     * Fetch all approved posts from the database.
     *
     * @return \Illuminate\Support\Collection
     */
    public function fetchApprovedPosts()
    {
        return Post::where('status', 'approved')->get();
    }

    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'email' => 'required|email',
            'title' => 'required|string',
            'body' => 'required|string',
        ]);

        Post::create($request->all());

        return redirect()->route('home')->with('success', 'Post created successfully.');
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
        return response()->json($post);
    }

    /**
     * Update the status of a specific post.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function updateStatus(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:pending,approved',
        ]);

        $post = Post::findOrFail($id);
        $post->status = $request->input('status');
        $post->save();

        return response()->json(['status' => 'success', 'message' => 'Post status updated successfully']);
    }

    /**
     * Remove the specified post from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\RedirectResponse
     */
    public function archive(Post $post)
    {
        $post->delete();
        return response()->json(['status' => 'success', 'message' => 'Post archived successfully']);
    }
}
