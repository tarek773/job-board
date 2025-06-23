<?php

namespace App\Http\Controllers;

use App\Http\Requests\BlogPostRequest;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $table = Post::latest()->cursorPaginate( 25);
        return view('post.index', ['posts'=> $table , 'pagetitle' => 'Blog']);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('post.create', [ 'pagetitle' => 'Blog - Create Post']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BlogPostRequest $request)
    {
       
        $post = new Post();

        $post->title = $request->input("title");
        $post->author = $request->input('author');
        $post->body = $request->input(  "body");
        $post->published = $request->has("published");


        $post->save();

        return redirect('/blog')->with('success','the blog is created successfully');
         
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $table = Post::findOrFail( $id );
        return view('post.show', ['post'=> $table , 'pagetitle' => 'Blog']);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $post = Post::findOrFail($id);
    
        return view('post.edit', ['post' => $post, 'pagetitle' => 'Blog - Edit Post']);
    
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BlogPostRequest $request, string $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->input("title");
        $post->author = $request->input('author');
        $post->body = $request->input(  "body");
        $post->published = $request->has("published");


        $post->save();

        return redirect('/blog')->with('success','the blog is updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/blog')->with('success','the blog is deleted successfully');
        
    }
}
