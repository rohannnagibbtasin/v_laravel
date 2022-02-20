<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ShowCrontroller;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('show-auth-user',[ShowCrontroller::class,'show_auth']);
Route::get('check-auth-user',[ShowCrontroller::class,'check_auth']);
Route::get('/report', function () {
    return view('report');
})->middleware('auth');
require __DIR__.'/auth.php';
