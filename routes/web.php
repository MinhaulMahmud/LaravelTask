<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/posts',[PostController::class, 'store']);
Route::get('/posts'  ,[PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);