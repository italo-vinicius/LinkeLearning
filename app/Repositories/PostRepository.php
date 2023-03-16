<?php

namespace App\Repositories;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostRepository
{

    public function newPost(Request $request): bool
    {
        try {
            $post = new Post;
            $post->title = $request->input('title');
            $post->content = $request->input('content');
            $post->user_id = Auth::id();
            $post->save();
            return true;
        } catch (\Exception $exception){
            return false;
        }

    }
}
