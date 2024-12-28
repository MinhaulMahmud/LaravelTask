<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Blog Post Routes
Route::post('/posts',[PostController::class, 'store']);
Route::get('/posts'  ,[PostController::class, 'index']);
Route::get('/posts/{id}', [PostController::class, 'show']);

// User Routes
Route::post('/register', [UserController::class, 'register']);

// Task Routes
Route::post('/tasks', [TaskController::class, 'store']);
Route::put('/tasks/{id}', [TaskController::class, 'update']);