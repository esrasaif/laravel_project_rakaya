<?php

use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use Symfony\Component\Yaml\Yaml;
use Spatie\YamlFrontMatter\YamlFrontMatter; 


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function ()

 {  
    //  get the posts and the category in same query , that will fix n+1 problem which mean many sql excute each time we reload the page and that will affect to the performane(:
    $posts = Post::latest()->with('category','author');
     
    // after we got the posts here we query specific post accourding to the title or the body that the user enterd
     if(request('search'))
   {
        $posts
        ->where( 'title','like','%'.request('search').'%' )
        ->orWhere( 'body','like','%'.request('search').'%' );


   }


    return view('posts',
    ['posts' => $posts->get(),
     'categories' => Category::all()
    
    ]);

    // 2way to display posts using arraymap
    // // fetch all files using file model 
    // $files= File::files(resource_path("posts/"));
    // // store array of files inside variable 
    // $posts =[];
    // // loop over files and store the value in file variable then the function will extract the meta from file then will build object of  post class and store the metaadata which fetch it from file into the attributes that inside post object 
    // $posts= array_map(function($file)
    // {    
    //     $document= YamlFrontMatter::parseFile($file);  //here we extract the metadata from file using pasrefile method and storing it in document variable
    //     return new Post(
    //      $document->title,
    //      $document->excerpt,
    //      $document->date,
    //      $document->body(),
    //      $document->slug
    //    );
    // }  //end fun
    
    // ,$files );
     

    //    return view('posts',
    //    ['posts' => $posts]);


})->name('home');


Route::get('posts/{post}', function (Post $post) {

    //  find post using its id and pass the value to view "post"
return view('/post', ['post' => $post ]);

    
// return view('/post', ['post' => $post = Post::findOrFail($id) ]);


})->where('post', '[A-z0-9_\-]+');


Route::get('categories/{category}', function (Category $category) {

return view('/posts', ['posts' => $category->posts ]);


})->where('category', '[A-z0-9_\-]+');


// find the author as its primary key the usernamme not the id 
Route::get('authors/{author:username}', function (User $author) {
//    dd($author);
    return view('/posts', ['posts' => $author->posts ]);
    
    
    });
    