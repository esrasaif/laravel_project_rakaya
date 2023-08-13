<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;

class postController extends Controller
{  

    public function index()
    {
           $posts = Post::latest()->filter(request(['search','category','author']))->paginate(6)->withQueryString(); 
            return view('posts.index',
            ['posts' => $posts  ]);
    }
    // end index fun

    // public function index()
    // {
    //        $posts = Post::latest()->filter(request(['search','category','author']))->get(); 
    //         return view('posts.index',
    //         ['posts' => $posts  ]);
    // }
    // // end index fun










    public function show(Post $post )
    {
        return view('posts.show', ['post' => $post ]);


    }
    // end show fun


    public function createPost(Post $post )
    {
        return view('posts.createPost', ['post' => $post ]);


    }
    // end show fun

    public function storePost()
    {

        // validate
        $validatedAttributes = request()->validate([
            'title'=>'required',
            'slug'=>['required',Rule::unique('posts','slug')],
            'body'=>'required',
            'excerpt'=>'required',
            'category_id'=>['required',Rule::exists('categories','id') ]

        ]);
    
        dd('here');

    $validatedAttributes['user_id'] =  auth()->id;
    // create post
     Post::create($validatedAttributes);


        // view
        return redirect('/');

    }

}//end class
