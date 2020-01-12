<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function show()
    {
        $posts = Post::orderBy('updated_at', 'desc')->get();
        return view('posts.show')->with(['posts' => $posts]);
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|unique:posts',
            'body' => 'required',
        ]);

        $post = new Post;

        $post->title = $validatedData["title"];
        $post->body = $validatedData["body"];

        $post->save();

        return redirect()->route('posts-show');
    }

    public function single($id)
    {

        $post = Post::findOrFail($id);

        return view('posts.single')->with(['post' => $post]);
    }

    public function destroy($id)
    {

        $post = Post::findOrFail($id);
        $post->delete();
        return redirect()->route('posts-show');
    }


    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit')->with(['post' => $post]);
    }


    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'id' => 'required',
            'title' => 'required|unique:posts',
            'body' => 'required',
        ]);

        $post = Post::where('id', $id)->firstOrFail();

        $post->title = $validatedData["title"];
        $post->body = $validatedData["body"];

        $post->save();

        return redirect()->route('posts-single', $id);
    }
}
