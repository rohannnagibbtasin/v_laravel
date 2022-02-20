<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\IndexController;
Route::get('/', function () {
    return view('welcome');
});
Route::get('add-author', [AuthorController::class,'add_author']);
Route::get('add-post/{id}', [PostsController::class,'add_post']);
Route::get('show-post/{id}',[PostsController::class,'show_post']);
Route::get('show-author/{id}',[AuthorController::class,'show_author']);
Route::get('index/{id}',[IndexController::class,'index']);