<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/skill', function () {
    return view('skill');
})->name('skill');

Route::get('/contact',[ContactController::class,'show'])->name('contact');
Route::get('/services',[ServiceController::class,'show'])->name('services');
