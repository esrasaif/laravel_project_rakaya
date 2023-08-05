<?php

use App\Models\Post;
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
    
    // fetch all files using file model 
    $files= File::files(resource_path("posts/"));
    // store array of files inside variable 
    $posts =[];
    // loop over files and store the value in file variable then the function will extract the meta from file then will build object of  post class and store the metaadata which fetch it from file into the attributes that inside post object 
    $posts= array_map(function($file)
    {    
        $document= YamlFrontMatter::parseFile($file);  //here we extract the metadata from file using pasrefile method and storing it in document variable
        return new Post(
         $document->title,
         $document->excerpt,
         $document->date,
         $document->body(),
         $document->slug
       );
    }  //end fun
    
    ,$files );
     

       return view('posts',
       ['posts' => $posts]);

    //    way to display the posts without its metadata
    // $posts = Post::all();
    // return view('posts',
    // ['posts' => $posts]);



});


Route::get('posts/{post}', function ($slug) {

    // 2way , find post using its slug and pass the value to view "post"

     

return view('/post', ['post' => $post = Post::find($slug) ]);


})->where('post', '[A-z0-9_\-]+');
