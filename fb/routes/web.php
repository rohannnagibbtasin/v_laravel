<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Tasin;


Route::get('/',function (){
    return view('home');
});
Route::get('/contact',function (){
    return view('contact');
});
