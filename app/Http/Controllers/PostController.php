<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Flasher\Prime\FlasherInterface;

class PostController extends Controller
{
    // public function index(){
    //     // $flasher->addCreated('Post created successfully');
    //    return view('layouts.post');
    // }

    public function create(){
        return view('layouts.post');
    }
    public function store(request $request, FlasherInterface $flasher){

        $request->validate([
            'title' => 'required|string|max:255',
            'body' => 'required|string',
        ]);

        // Create the post (assuming you have a Post model)
        Post::create([
            'title' => $request->title,
            'body' => $request->body,
        ]);

        $flasher->addSuccess('Post created successfully');
        return redirect()->route('post.create');

    }
}
