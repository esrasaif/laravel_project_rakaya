<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Validator;


class postController extends Controller
{  

    public function index()
    {
           $posts = Post::latest()->filter(request(['search','category','author']))->paginate(7)->withQueryString(); 
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
            // $path= ddd(request()->file('thumbnail')->store('thumbnails'));
            //  return 'done'.$path;


        // validate
        $validatedAttributes = request()->validate([
               
            'thumbnail' => 'required|image',
            'title' => 'required',
            'body' => 'required',
            'excerpt' => 'required',
            'category_id' => ['required', Rule::exists('categories','id')],
            'slug' => ['required', Rule::unique('posts','slug')]

        ]);

      
    $validatedAttributes['user_id'] =  auth()->id();
    // store in both database and localstorage inlaravel
    $validatedAttributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

    // create post
     Post::create($validatedAttributes);


        // view
        return redirect('/');

    }

}//end class
