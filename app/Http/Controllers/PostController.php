<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
		$posts = Post::all();
		return view('posts.index',compact('posts'));
	}

    public function published() {
		$postsPublished = Post::where('published', '1')->get();
		return view('posts.published',compact('postsPublished'));
	}
}
