<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;

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

// Route::get('tasin',function(){
//     return 'hello world';
// });

// Route::match(['get','post'],'/tasin',function(){
//     return 'Hello';
// });
// Route::get('/users', function (Request $request) {
//     return $request;
// });
// Route::redirect('/here', '/there',301);
// Route::get('/greet/{name}',function($name){
//     return view('aboutme',['name'=>$name]);
// })->where('name','[A-Za-z]+');

// Route::get('/about/{name}',[AboutController::class,'show']);

Route::get('/',function(){
    return view('welcome');
});