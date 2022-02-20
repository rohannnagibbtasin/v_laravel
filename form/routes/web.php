<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Form;

Route::get('/',[Form::class,'show']);
Route::post('/',[Form::class,'input']);
