<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tasin;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
// Route::get('/about', function () {
//     return view('about',['name'=>'Sonam']);
// });
Route::get('/about', function () {
    return view('about')->with('name','Tasin');
});
Route::get('/contact',[tasin::class,'show']);