<?php

use App\Http\Controllers\postController;
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

Route::get('/', [postController::class , 'index']           )->name('home');


Route::get('posts/{post}',  [postController::class , 'show'])->where('post', '[A-z0-9_\-]+');


Route::get('categories/{category}', function (Category $category) 
{
    return view('/posts', ['posts' => $category->posts ,
    'currentCategory' => $category ,
    'categories' => Category::all() ]);
})
->where('category', '[A-z0-9_\-]+')
->name('category');


// find the author as its primary key the usernamme not the id 
Route::get('authors/{author:username}', function (User $author) {
//    dd($author);
    return view('/posts', ['posts' => $author->posts ,
    'categories' => Category::all()]);
    
    
    });
    