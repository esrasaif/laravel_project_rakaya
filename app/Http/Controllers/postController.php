<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;

class postController extends Controller
{
    public function index()
    {

            $posts = Post::latest()->filter(request(['search']))->get(); 
            
            return view('posts',
            ['posts' => $posts,
            'categories' => Category::all()
            
            ]);



    }
    // end index fun


    public function show(Post $post )
    {
        return view('/post', ['post' => $post ]);


    }
    // end show fun




}//end class
