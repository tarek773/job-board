<?php

use App\Http\Controllers\indexController;
use App\Http\Controllers\jobController;
use App\Http\Controllers\postController;
use Illuminate\Support\Facades\Route;

Route::get('/', [indexController::class,'index']);
Route::get('/about', [indexController::class,'about']);
Route::get('/contact', [indexController::class,'contact']);
Route::get('/blog', [postController::class,'index']);
Route::get('/blog/create', [postController::class,'create']);
// Route::get('/job', [jobController::class,'index']);