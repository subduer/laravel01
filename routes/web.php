<?php

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
    return view('newwelcome');
});
Route::get('/old', function () {
    return view('welcome');
});

// routes/web.php
Route::get('posts', function () {
    $posts = DB::table('posts')->get();

    return view('posts.index', ['posts' => $posts]);
});