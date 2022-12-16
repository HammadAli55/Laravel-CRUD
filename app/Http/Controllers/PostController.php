<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function addPost() {
        return view('add-post');
    }
    
    public function savePost(Request $request) {
       DB::table('posts')->insert([
        'name' => $request -> name,
        'description' => $request -> description
       ]);

       return back() -> with('post_add', 'Post added successfully');
    }

    public function postList() {
        $posts = DB::table('posts')->get();
        return view('post-list', compact('posts'));
    }
}
