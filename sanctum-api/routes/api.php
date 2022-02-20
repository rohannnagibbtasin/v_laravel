<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


// Route::get('/students', [StudentController::class,'index']);
// Route::get('/student/{id}', [StudentController::class,'show']);
// Route::post('/students', [StudentController::class,'store']);
// Route::put('/student/{id}', [StudentController::class,'update']);
// Route::delete('/student/{id}', [StudentController::class,'destroy']);


// Route::middleware('auth:sanctum')->get('/students', [StudentController::class,'index']);
Route::post('/register', [UserController::class,'register']);
Route::post('/login', [UserController::class,'login']);

Route::middleware(['auth:sanctum'])->group(function(){
    Route::get('/students', [StudentController::class,'index']);
    Route::get('/student/{id}', [StudentController::class,'show']);
    Route::post('/students', [StudentController::class,'store']);
    Route::put('/student/{id}', [StudentController::class,'update']);
    Route::delete('/student/{id}', [StudentController::class,'destroy']);
    Route::post('/logout',[UserController::class,'logout']);
});