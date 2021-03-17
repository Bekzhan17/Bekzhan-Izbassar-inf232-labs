<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Post;

class BlogController extends Controller
{
    public function index() {
        $posts = Post::all();

        return view('blog.index')->with(['posts' => $posts]);
    }

    public function store(Request $request) {
        Post::create([
            'id' => $request->id,
            'title' => $request->title,
            'body' => $request->body,
            'timestamps' => $request->timestamps
        ]);

        return back();
    }

    public function get_post($id) {
        $post = Post::find($id);

        if ($post == null)
            return response(['message' => 'post not found'], 404);

        return view('blog.detail')->with(['post' => $post]);    
    }
}
