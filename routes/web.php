<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', AboutController::class)->name('about.page');

Route::get('/contact', function () {
    $textContents = [
        [ 
            'content' => 'Content One',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Two',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Three',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Four',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Five',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'completed'
        ],
        [
            'content' => 'Content Six',
            'text' => 'Lorem ipsum dolor sit amet consectetur.',
            'status' => 'pending'
        ]
    ];
    // return '<h1>Contact Page</h1>';
    return view('contact.index', ['textContent' => $textContents]);
})->name('contact.page');

Route::get('/news/{id}', function ($id) {
    return "<h1>New = {$id}</h1>";
})->name('news.page');

Route::get('/product/{id}', function ($id) {
    return '<h1>Product = ' . $id . '</h1>';
});

Route::get('/home', [HomeController::class, 'index'])->name('home.page');
// return "<h2><a href='/about'>About</a></h2>";

Route::get('/content', function () {
    return "<h2><a href='" . route('about.page') . "'>About</a></h2>";
});

Route::get('/course', function () {
    return "<h2><a href='" . route('news.page', ['id' => 2]) . "'>News</a></h2>";
});

Route::group(['prefix' => 'user'], function () {
    Route::get('/', function () {
        return '<h2>User List</h2>';
    });

    Route::get('/create', function () {
        return '<h2>User Create</h2>';
    });

    Route::get('/show', function () {
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

Route::fallback(function () {
    return '<h1>404 - Page Not Found</h1>';
});

/**
 * Controller MVC
 * ----------
 * M - Model (Data)
 * V - View (UI)
 * C - Controller (Logic)
 */

Route::resource('/blogs', BlogController::class);

Route::get('/login', [LoginController::class, 'index']);

Route::post('/login', [LoginController::class, 'handleLogin'])->name('login.handle');