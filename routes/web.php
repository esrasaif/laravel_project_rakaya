<?php


use App\Http\Controllers\RegisterController;
use App\Http\Controllers\postController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use Symfony\Component\Yaml\Yaml;
use Spatie\YamlFrontMatter\YamlFrontMatter; 


Route::get('/', [postController::class , 'index'])->name('home');


Route::get('posts/{post}',  [postController::class , 'show'])->where('post', '[A-z0-9_\-]+');

Route::get('/register',  [RegisterController::class , 'createAccount'])->middleware('guest');
Route::post('/register',  [RegisterController::class , 'storeNewUser'])->middleware('guest');

Route::post('/logOut',  [SessionsController::class , 'destroySession'])->middleware('auth');


Route::get('/logIn',  [SessionsController::class , 'createSession'])->middleware('guest');
Route::post('/logIn',  [SessionsController::class , 'storeSession'])->middleware('guest');

Route::get('/admin/posts/createPost',  [postController::class , 'createPost'])->middleware('admin');
Route::post('/admin/posts', [postController::class ,'storePost'])->middleware('admin');


// Route::get('categories/{category}', function (Category $category) 
// {
//     return view('/posts', ['posts' => $category->posts ,
//     'currentCategory' => $category ,
//     'categories' => Category::all() ]);
// })
// ->where('category', '[A-z0-9_\-]+')
// ->name('category');


// // find the author as its primary key the usernamme not the id 
// Route::get('authors/{author:username}', function (User $author) {
// //    dd($author);
//     return view('posts.show', ['posts' => $author->posts ]);
    
    
//     });
    