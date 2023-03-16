<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index($id)
    {
        return view('home', compact('id'));
    }

    public function showTimeline($id, User $user)
    {
        $posts = $user::find($id)->posts;
        return view('timeline', compact('id', 'posts') );
    }

    public function createPost($id, Request $request)
    {
        $post = new Post;
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $post->user_id = Auth::id();
        $post->save();

        return redirect()->route('homePage', compact('id'));
    }

    public function editPost(User $id, Post $post)
    {

        return view('editPost', compact('id', 'post'));
    }

    public function updatePost(Post $post, Request $request)
    {
        $post->update($request->input());
        return redirect()->route('timeline', $post->user_id);
    }

    public function deletePost(Post $post)
    {
        $post->delete();
        return redirect()->route('timeline', $post->user_id );
    }
}
