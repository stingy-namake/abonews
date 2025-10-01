<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $posts = Post::orderBy('created_at', 'DESC')->simplePaginate(10);
        $posts = Post::orderBy('created_at', 'DESC')->paginate(10);
        // same as '$posts = Post::latest()->get();'


        // dump($categories);
        // dd($categories); //'dump and die', stops the code execution after dumping

        return view('post.index',[
            'posts' => $posts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'category_id'=>['required', 'exists:categories,id'],
            'title'=>'required',
            'content'=>'required',
            'image'=>['required', 'image', 'mimes:jpeg,png,jpg,gif,svg', 'max:2048'],
            // same as 'image'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
