<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{   
    // view all posts
    public function index()
    { 
        return view('admin.posts.index',['posts'=> Post::paginate(30) ]);

    }



    // display the form of add new post
    public function createPost(Post $post )
    {
        return view('posts.createPost', ['post' => $post ]);


    }
    // end show fun

    public function storePost()
    {
            // $path= ddd(request()->file('thumbnail')->store('thumbnails'));
            //  return 'done'.$path;


            $validatedAttributes= $this->validatePost();
            $validatedAttributes['user_id'] =  auth()->id();
            $validatedAttributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');
            // create post
            Post::create($validatedAttributes);
            // view
            return redirect('/');

    }


     // view edit post page
     public function edit(Post $post )
     {
         return view('admin.posts.edit', ['post' => $post ]);
     }

      
     public function update(Post  $post )
    {
            // $path= ddd(request()->file('thumbnail')->store('thumbnails'));
            //  return 'done'.$path;

            $validatedAttributes= $this->validatePost($post);
 
           if($validatedAttributes['thumbnail']?? false)
           {
            $validatedAttributes['thumbnail'] = request()->file('thumbnail')->store('thumbnails');

           }


      $post->update($validatedAttributes);
      return back()->with('success','post updated ');

        
    }



    public function destroy(Post $post)
      {
          
      $post->delete();
      return back()->with('success','post deleted ');


      }



      protected  function validatePost(?Post $post = null)
      {
            $post ??= new Post();
            
            // validate
            return request()->validate([
                
                'thumbnail' => $post->exists ?['image'] : ['image' ,'required'],
                'title' => 'required',
                'body' => 'required',
                'excerpt' => 'required',
                'category_id' => ['required', Rule::exists('categories','id')],
                'slug' => ['required', Rule::unique('posts','slug')->ignore($post->id)]

            ]);

      }







}    // end class

