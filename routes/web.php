<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\ToolsController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('categories', CategoriesController::class);
Route::resource('tools', ToolsController::class);