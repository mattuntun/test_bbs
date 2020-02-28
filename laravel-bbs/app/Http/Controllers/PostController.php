<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() {
    $posts = Post::orderBy('created_at','desc')->get();

        return view('posts.index',['posts'=>$posts]);
    }

    public function create() {
        return view('post.create');
    }

    public function store(Request $request) {
        $paramas = $request->validate([
            'title' => 'required|max:50',
            'body' => 'required|max:2000',
        ]);

        Post::create($params);

        return redirect()->route('top');


    }








}
