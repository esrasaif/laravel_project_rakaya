<?php

use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('posts');
});


Route::get('posts/{post}', function ($slug) {

    // find post using its slug and pass the value to view "post"

    // // get the path of file wich wil be redirect to it 
    // $path = __DIR__ . "/../resources/posts/{$slug}.html";

    // //   check if this file exists
    // if (!file_exists($path)) {
    //     return redirect('/');
    // }

    // // fetch the file data and store it inside the cach for specifi time
    // $post =  cache()->remember("posts.{slu}", 5, function () use ($path) {
    //     return  file_get_contents($path);
    // });

    // // fetch the file data


    // // view this page and pass specific value to variable inside this page 
    // return view('/post', ['post' => $post]);

    // // to put constrains on wildcard the contents that inside the curly brackets


})->where('post', '[A-z0-9_\-]+');
