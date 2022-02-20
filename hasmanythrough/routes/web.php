<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\DeploymentController;
use App\Http\Controllers\LanguageController;
Route::get('/add-project',[ProjectController::class,'add_project']);
Route::get('/add-language/{id}',[LanguageController::class,'add_language']);
Route::get('/add-deployment/{id}',[DeploymentController::class,'add_deployment']);
Route::get('/{id}',[DeploymentController::class,'show_deployment']);
