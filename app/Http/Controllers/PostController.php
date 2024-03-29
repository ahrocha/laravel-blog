<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
// Show all posts
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('posts.index', ['posts' => $posts]);
    }

  // Create post
    public function create() {
        return view('posts.create');
    }

    public function show($slug) {
        $post = Post::where('slug', $slug)->firstOrFail();
        $post->images = $post->getImagesFromDescription();
        $post->description = $post->getDescriptionWithoutImages();
        return view('posts.show', compact('post'));
    }
}
