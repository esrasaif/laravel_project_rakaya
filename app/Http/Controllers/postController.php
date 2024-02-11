<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;


class postController extends Controller
{  

    public function index()
    {


        $posts = Post::latest()->filter(request(['search','category','author']))->paginate(3)->withQueryString(); 
            return view('posts.index', ['posts' => $posts  ]);
    }
    // end index fun    

    public function show(Post $post )
    {
        return view('posts.show', ['post' => $post ]);


    }
    // end show fun


}//end class
