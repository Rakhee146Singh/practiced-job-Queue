<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Events\PostCreated;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $post = Post::all();
        return view('dashboard', ['posts' => $post]);
    }

    public function create(Request $request)
    {
        $post_data = $this->validate($request, [
            'title' => 'required',
            'content' => 'required'
        ]);
        Post::create($request->only('title', 'content') + ['user_id' => auth()->id()]);
        $data = ['title' => $post_data['title'], 'author' => auth()->user()->name];
        event(new PostCreated($data));
        return redirect('add')->back()->withSuccess('Post Created');
    }
}
