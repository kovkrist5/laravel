<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriesController;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('categories', CategoriesController::class);
