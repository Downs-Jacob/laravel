<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function show($slug)
    {
        $post= \DB::table('posts')->where('slug', $slug)->first();

            // $posts = [
            //     'my-first-post' => 'Hello, this is my first post',
            //     'my-second-post' => 'Hello, this is my second post'
            // ];


            return view('post', [
                'post' => $post
            ]);

    }
}
