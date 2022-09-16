<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('posts.index');
    }
    public function create()
    {
        return view('posts.create');
    }
    public function store(Request $req)
    {
        Post::create
        ([
            'title' => $req->title,
            'content' => $req->content,

        ]);
        return redirect()->route('posts.index');
    }
    public function show($id)
    {
        return view('posts.show',['postId' => $id]);
    }

}
