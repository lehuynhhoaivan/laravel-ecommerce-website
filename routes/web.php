<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return '<h1>About Page</h1>';
})->name('about.page');

Route::get('/contact', function () {
    return '<h1>Contact Page</h1>';
});

Route::get('/news/{id}', function ($id) {
    return "<h1>New = {$id}</h1>";
})->name('news.page');

Route::get('/product/{id}', function ($id) {
    return '<h1>Product = '.$id.'</h1>';
});

Route::get('/home', function () {
    return "<h2><a href='/about'>About</a></h2>";
});

Route::get('/content', function () {
    return "<h2><a href='".route('about.page')."'>About</a></h2>";
});

Route::get('/course', function () {
    return "<h2><a href='".route('news.page', ['id' => 2])."'>News</a></h2>";
});

Route::group(['prefix' => 'user'], function() {
    Route::get('/', function() {
        return '<h2>User List</h2>';
    });

    Route::get('/create', function() {
        return '<h2>User Create</h2>';
    });

    Route::get('/show', function() {
        return '<h2>User Show</h2>';
    });
});

/**
 * GET - Request a resource
 * POST - Create a new resource
 * PUT - Update a resource
 * PATCH - Modify a resource
 * DELETE - Move a resource
 * ///////////////////////////
 * Example - Route::post
 */



