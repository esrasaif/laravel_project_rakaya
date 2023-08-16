<?php


use App\Http\Controllers\AdminController;
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


// admin 
Route::get('/admin/posts/createPost',  [AdminController::class , 'createPost'])->middleware('can:admin');
Route::post('/admin/posts', [AdminController::class ,'storePost'])->middleware('can:admin');
Route::get('/admin/posts',  [AdminController::class , 'index'])->middleware('can:admin');
Route::get('/admin/posts/{post}/edit',  [AdminController::class , 'edit'])->middleware('can:admin');
Route::patch('/admin/posts/{post}',  [AdminController::class , 'update'])->middleware('can:admin');
Route::delete('/admin/posts/{post}', [AdminController::class , 'destroy'])->middleware('can:admin');



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
    