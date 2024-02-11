<?php


use App\Http\Controllers\AdminController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\NewsLetterController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\postController;
use App\Http\Controllers\SessionsController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use App\Services\NewsLetter;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use League\CommonMark\Extension\FrontMatter\Data\SymfonyYamlFrontMatterParser;
use Symfony\Component\Yaml\Yaml;
use Spatie\YamlFrontMatter\YamlFrontMatter; 


// Auth::routes(['verify'=>true]);

Route::get('/', [postController::class , 'index'])->name('home');
Route::post('newsletter' , NewsLetterController::class);


Route::get('posts/{post}',  [postController::class , 'show'])->where('post', '[A-z0-9_\-]+');




Route::get('/register',  [RegisterController::class , 'createAccount'])->middleware('guest');
Route::post('/register',  [RegisterController::class , 'storeNewUser'])->middleware('guest');

Route::post('/logOut',  [SessionsController::class , 'destroySession'])->middleware('auth');


Route::get('/logIn',  [SessionsController::class , 'createSession'])->middleware('guest');
Route::post('/logIn',  [SessionsController::class , 'storeSession'])->middleware('guest');


// admin 
Route::middleware('can:admin')->group(function()
{

Route::get('/admin/posts/createPost',[AdminController::class , 'createPost']);
Route::post('/admin/posts', [AdminController::class ,'storePost']);
Route::get('/admin/posts',  [AdminController::class , 'index']);
Route::get('/admin/posts/{post}/edit',  [AdminController::class , 'edit']);
Route::patch('/admin/posts/{post}',  [AdminController::class , 'update']);
Route::delete('/admin/posts/{post}', [AdminController::class , 'destroy']);

});


// comment
Route::post('/posts/{post:slug}/comments',  [CommentController::class , 'addComment'] );

