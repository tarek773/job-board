<?php

use App\Http\Controllers\api\PostApiController;

use Illuminate\Support\Facades\Route;

Route::apiResource('post', PostApiController::class);