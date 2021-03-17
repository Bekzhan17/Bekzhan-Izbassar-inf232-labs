<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Models\Post;

class ApiController extends Controller
{
    public function index(Request $request) {
        $posts = Post::all();

        return response($posts, 200);
    }
}
