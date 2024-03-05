<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index(){
        $posts = Post::orderBy('created_at', 'DESC')->get();

        return view('post.index', ['posts' => $posts]);
    }

    public function store(){
        $validated = request()->validate([
            'title' => 'required|min:3|max:40',
            'content' => 'required|min:3|max:255'
        ]);
        $validated['user_id'] = auth()->id();

        Post::create($validated);

        return redirect()->route('posts.index')->with('success', "Created successfully!");
    }

    public function show(Post $post){
        return view('post.show', compact('post'));
    }

    public function edit(Post $post){
        return view('post.edit', compact('post'));
    }

    public function update(Post $post){
        $validated = request()->validate([
            'title' => 'required|min:3|max:40',
            'content' => 'required|min:3|max:255'
        ]);

        $post->update($validated);

        return redirect()->route('posts.show', $post->id)->with('success', 'Edited successfully!');
    }

    public function destroy(Post $post){
        $post->delete();

        return redirect()->route('posts.index')->with('success', 'Deleted successfully!');
    }
}
