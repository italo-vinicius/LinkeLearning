<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index($id)
    {
        return view('home', compact('id'));
    }

    public function showTimeline($id)
    {
        return view('timeline', compact('id') );
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
}
