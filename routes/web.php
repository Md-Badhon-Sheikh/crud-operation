<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home',['posts'=> Post:: all()]);
});

Route::get('/create', [PostController::class, 'create']);

Route::post('/store', [PostController::class, 'fileStore'])-> name('store');