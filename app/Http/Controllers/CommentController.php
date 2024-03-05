<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function store(Post $post){
        $validated = request()->validate([
            'content' => 'required|min:3|max:255'
        ]);
        $validated['user_id'] = auth()->id();
        $validated['post_id'] = $post->id;

        Comment::create($validated);

        return redirect()->route('posts.show', $post->id)->with('success', 'Commented successfully!');
    }
}
