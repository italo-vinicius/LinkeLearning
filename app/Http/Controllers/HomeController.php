<?php

namespace App\Http\Controllers;


use App\Models\Post;
use App\Models\User;
use App\Repositories\PostRepository;
use Dflydev\DotAccessData\Data;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    private PostRepository $repository;

    public function __construct(PostRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index($id)
    {
        $person = User::find($id);
        return view('home', compact('id', 'person'));
    }

    public function showTimeline($id, User $user)
    {
        $posts = $user::find($id)->posts;
        $person = User::find($id);
        return view('timeline', compact('id', 'posts', 'person'));
    }

    public function createPost($id, Request $request)
    {
        if ($this->repository->newPost($request)) {
            return redirect()->route('homePage', $id);
        } else {
            return redirect('home/' . $id)->withErrors(['errors' => 'Houve algum erro. Tente novamente'])->withInput();
        }
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
        return redirect()->route('timeline', $post->user_id);
    }
}
