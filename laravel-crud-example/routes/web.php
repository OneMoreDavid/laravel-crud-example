<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('posts/', function () {
    return view('index');
});

Route::resource('posts', PostController::class);
