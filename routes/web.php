<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

Route::get('/', indexController::class);
Route::get('/about', AboutController::class);
Route::get('/contact', ContactController::class);


Route::resource('blog', PostController::class);
Route::resource('tag', TagController::class);
Route::resource('comment', CommentController::class);