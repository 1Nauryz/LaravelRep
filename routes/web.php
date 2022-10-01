<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function ()
{
    return redirect()->route('posts.index');
});
Route::resource('posts', PostController::class);


Route::get('/posts/category/{category}',[PostController::class, 'postsByCategory'])->name('posts.category');
Route::resource('comments', \App\Http\Controllers\CommentController::class);



//Route::get('/', function () {return redirect()->route('posts.index');});
//Route::get('/posts', [PostController::class, 'index'] )->name('posts.index');
//Route::get('/posts/{id}', [PostController::class, 'show'] )->name('posts.show');
//Route::get('/posts/create', [PostController::class, 'create'] )->name('posts.create');
//Route::post('/posts',[PostController::class,'store'])->name('posts.store');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
