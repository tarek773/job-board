<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
class postController extends Controller
{
    //
    public function index(){
        $table = \App\Models\Post::cursorPaginate(5);
        return view('post.index', ['posts'=> $table , 'pagetitle' => 'Blog']);
    }

    public function create(){
        \App\Models\Post::factory(100)->create();
        // return redirect('/blog')->with('success', 'Posts created successfully');
        return redirect('/blog');
    }
}
