<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Validation\ValidationException;

class PostController extends Controller
{
    public function store(Request $request) {
        #validate request
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
        ]);

        $post = Post::create($validated);
        
        #return response with message
        return response()->json($post, 201);
    }

    public function index() {
        #get all posts
        $posts = Post::all();
        return response()->json($posts, 200); #return all post as list
    }

    public function show($id) {
       $post = Post::find($id);
       return response()->json($post, 200); #return post with id
    }
}
