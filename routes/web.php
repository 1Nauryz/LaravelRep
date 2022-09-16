<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;


Route::get('/', function () {return redirect()->route('posts.index');});
Route::get('/posts', [PostController::class, 'index'] )->name('posts.index');
Route::get('/posts/{id}', [PostController::class, 'show'] )->name('posts.show');
Route::get('/posts/create', [PostController::class, 'create'] )->name('posts.create');
Route::post('/posts',[PostController::class,'store'])->name('posts.store');
