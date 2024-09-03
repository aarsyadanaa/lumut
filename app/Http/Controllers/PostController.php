<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        Post::create([
            'title' => $request->title,
            'content' => $request->content,
            'date' => now(),
            'username' => Auth::user()->username,
        ]);

        return redirect()->route('posts.index');
    }

    public function edit($idpost)
    {
        $post = Post::findOrFail($idpost);
        return view('posts.edit', compact('post'));
    }

    public function update(Request $request, $idpost)
    {
        $request->validate([
            'title' => 'required|string',
            'content' => 'required|string',
        ]);

        $post = Post::findOrFail($idpost);
        $post->update([
            'title' => $request->title,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.index');
    }

    public function destroy($idpost)
    {
        Post::findOrFail($idpost)->delete();
        return redirect()->route('posts.index');
    }
}
